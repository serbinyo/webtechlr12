<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestbookController extends Controller
{
	public function guestbookShow()
	{
		$out = array();
		if(is_file('../public/files/messages.inc'))
		{
			foreach(file('files/messages.inc') as $v)
			{
				$out[] = explode(';', $v);
			}
			if(!empty($out))
			{
				usort($out, [$this,'mycmp']);
				$tbl = $this->drawTable($out);
			}
			else
			{
				echo '<h3 style="text-align: center;">Пока нет ни отдной записи в гостевой книге</h3>';
			}
		}
		else
		{
			echo '<h3 style="text-align: center;">Нет файла с записями</h3>';
		}

		return view('guestbook')->with(['user'=> $this->user, 'table'=>$tbl]);
	}

	public function store(Request $request)
	{
		$this->validate($request, 
			[
				'fio' => ['required','regex:/^[а-яА-Я_]+\s[а-яА-Я_]+\s[а-яА-Я_]+$/ui'],
				'email' => 'required|email',
				'body' => 'required'
			],
			[
				'fio.required' => 'Необходимо указать ФИО',
				'fio.regex' => 'Ф.И.О. должно состоять из 3-х слов кириллицей, разделенных пробелом',
				'email.required' => 'Необходимо указать email',
				'email.email' => 'Неверно указан email',
				'body.required'  => 'Необходимо написать сообщение',
			]);

		$data = $request->all();
		
		$entry = $this->addNewEntry($data);
		$this->messageToFile($entry);
		
		return redirect('guestbook');

	}

	private function mycmp($a, $b)
	{
		return strcmp($b[0], $a[0]);
	}

	function drawTable($out)
	{
		$tbl = '<table  class="table-study">';
		$tbl .= '<tr class="topic"><td>Время сообщения</td><td>ФИО</td><td>Email</td><td>Текст отзыва</td></tr>';
		foreach($out as $v)
		{
			$tbl .= '<tr><td>' . join("</td><td>", $v) . "</td></tr>";
		}
		$tbl .= '</table>';
		return $tbl;
	}

	function addNewEntry($data)
	{
		$fio     = htmlspecialchars($data['fio']);
		$email   = htmlspecialchars($data['email']);
		$body    = htmlspecialchars($data['body']);
		$time    = date("Y-m-d H:i:s");
		$message = $time . ';';
		$message .= $fio . ';';
		$message .= $email . ';';
		$message .= $body . "\r\n";
		
		return $message;
	}

	function messageToFile($message)
	{
		if(is_writable('../public/files/messages.inc')){
			$a = fopen('../public/files/messages.inc', 'a');
			fwrite($a, $message);
			fclose($a);
		}
	}
}
