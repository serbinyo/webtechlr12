<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Guestbook extends Model
{
    public function show()
    {
        $out = array();
        if(is_file('../public/messages.inc'))
        {
            foreach(file('messages.inc') as $v)
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
                $tbl = '<h3 style="text-align: center;">Пока нет ни отдной записи в гостевой книге</h3>';
            }
        }
        else
        {
            $tbl = '<h3 style="text-align: center;">Нет файла с записями</h3>';
        }
        return $tbl;
    }

    public function store($data)
    {
        $validator = Validator::make($data,
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

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $entry = $this->addNewEntry($data);
        $this->messageToFile($entry);



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
        if(is_writable('../public/messages.inc')){
            $a = fopen('../public/messages.inc', 'a');
            fwrite($a, $message);
            fclose($a);
        }
    }

    function loadFromFile()
    {
        $source = $_FILES["messages"]["tmp_name"];
        $dest = $_FILES["messages"]["name"];
        if (is_file($source)) {
            if ($_FILES["messages"]["name"] === 'messages.inc') {
                if (copy($source, $dest)) {
                    return $message = 'Файл успешно загружен';
                } else {
                    return $message = 'Ошибка загрузки файла';
                }
            } else {
                return $message = 'Ошибка. Требуется messages.inc';
            }
        } else {
            return $message = 'Ошибка чтения файла';
        }
    }
}
