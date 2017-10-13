@extends('layouts.main-layout')

@section('content')
				<div id="hobby-nav">
                    <a href="#hobby">мое хобби</a> | 
                    <a href="#books">мои любимые книги</a> | 
                    <a href="#music">мои любимые фильмы</a>
                </div>

                <section> 

                    <h3 id="hobby">Мое хобби</h3>

                    <?php
                    print_ul_li(
                            'Футбол', 'КВН'
                    );
                    ?>

                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

                    <h3 id="books">Мои любимые книги</h3>

                    <?php
                    print_ul_li(
                            '&quot;Братья Карамазовы&quot; Федор Михайлович Достоевский', '&quot;Три товарища&quot; Эрих Мария Ремарк'
                    );
                    ?>

                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

                    <h3 id="music">Мои любимые фильмы</h3>

                    <?php
                    print_ul_li(
                            'Криминальное чтиво', 'Кровавый четверг', 'На игле'
                    );
                    ?>

                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </section>
@endsection

      
		<?php
        function print_ul_li() {
            $numargs = func_num_args();
            echo '<ul>';
            $arg_list = func_get_args();
            for ($i = 0; $i < $numargs; $i++) {
                echo '<li>' . $arg_list[$i] . '</li>';
            }
            echo '</ul>';
        }
        ?>
