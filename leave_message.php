<?php
#echo $_POST["user_name"];
#echo $_POST["user_email"];
#echo $_POST["user_text"];




    $fp = fopen("text.txt",'w');
    fwrite($fp,$_POST["user_name"]."\r\n".$_POST["user_email"]."\r\n".$_POST["user_text"]);
    fclose($fp);

function abc(){
    echo "<script type='text/javascript'>alert('OK,thanks');</script>";
    echo ("<script>self.location=('/index.html');</script>");
    #echo rand(6,1000);


 }
echo abc();




?>

