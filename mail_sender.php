<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")&&(empty($_POST['spam_hidden']))){ 
        $to = 'klmv-s@yandex.ru';
        $subject = 'Обратный звонок';
        if(isset($_POST['comment'])&&!empty($_POST['comment'])){
            $msg = $_POST['comment'];
        }else{
            $msg = '';
        }        
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['tel'].'</p>  
                        <p>Сообщение: '.$msg.'</p>                      
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: Отправитель <from@example.com>\r\n"; 
        if(@mail($to, $subject, $message, $headers)){
            echo 'true';
        } else{
            echo 'false';
        }
}
?>