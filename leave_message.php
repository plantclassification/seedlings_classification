<?php
echo $_POST["user_name"];
echo $_POST["user_email"];
echo $_POST["user_text"];




    $fp = fopen("C:/wamp64/www/text.txt",'w');
    fwrite($fp,$_POST["user_name"]."\r\n".$_POST["user_email"]."\r\n".$_POST["user_text"]);
    fclose($fp);






?>

