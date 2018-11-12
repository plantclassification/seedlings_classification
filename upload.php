<?php

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["imgfile"]["name"]);
echo $_FILES["imgfile"]["size"];
$extension = end($temp);
if ((($_FILES["imgfile"]["type"] == "image/gif")
        || ($_FILES["imgfile"]["type"] == "image/jpeg")
        || ($_FILES["imgfile"]["type"] == "image/jpg")
        || ($_FILES["imgfile"]["type"] == "image/pjpeg")
        || ($_FILES["imgfile"]["type"] == "image/x-png")
        || ($_FILES["imgfile"]["type"] == "image/png"))
    && ($_FILES["imgfile"]["size"] < 2048000)   //  200 kb
    && in_array($extension, $allowedExts))
{
    if ($_FILES["imgfile"]["error"] > 0)
    {
        echo "error：: " . $_FILES["imgfile"]["error"] . "<br>";
    }
    else
    {
        echo "name: " . $_FILES["imgfile"]["name"] . "<br>";
        echo "type: " . $_FILES["imgfile"]["type"] . "<br>";
        echo "size: " . ($_FILES["imgfile"]["size"] / 1024) . " kB<br>";
        echo "temp location: " . $_FILES["imgfile"]["tmp_name"] . "<br>";


        if (file_exists("upload/" . $_FILES["imgfile"]["name"]))
        {
            echo $_FILES["imgfile"]["name"] . " You already uploaded the image "."<br>";
            echo"<br>"."<a href='/index.html ' style='color: crimson'>lets try again</a>";
        }
        else
        {

            move_uploaded_file($_FILES["imgfile"]["tmp_name"], "upload/" . $_FILES["imgfile"]["name"]);
            echo "image loaction in server: " . "upload/" . $_FILES["imgfile"]["name"]. "<br>";
            echo"<a href='/index.html ' style='color: crimson'>lets try again</a>"."<br>";
            $output = shell_exec('C:\Users\lenovo\AppData\Local\Programs\Python\Python36\python.exe predict.py -f upload/'.$_FILES["imgfile"]["name"]);
            //$output = shell_exec('sudo python predict.py -f upload/'.$_FILES["imgfile"]["name"]);
            //$output = shell_exec('python3 predict.py '."-f upload/".$_FILES["imgfile"]["name"]);
            echo"We believe this plant belongs to ".$output;

            //function abc(){
             //   echo ("<script>window.open('/index.html');</script>");
           // }
            //echo abc();

    }

}
}
else
{
    echo "something wrong, maybe yous should try a smaller one(jpg jpeg)"."<br>";
    echo"<a href='/index.html ' style='color: crimson'>lets try again</a>";
}
?>

