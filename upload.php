<?php


//设置需要删除的文件夹
$path = "./upload/";
//清空文件夹函数和清空文件夹后删除空文件夹函数的处理
function deldir($path){
    //如果是目录则继续
    if(is_dir($path)){
        //扫描一个文件夹内的所有文件夹和文件并返回数组
        $p = scandir($path);
        if(count($p)>30){
        foreach($p as $val){
            //排除目录中的.和..
            if($val !="." && $val !=".."){

                    //如果是文件直接删除
                    unlink($path.$val);

            }
        }}
    }
}
//调用函数，传入路径
deldir($path);

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
       // echo "name: " . $_FILES["imgfile"]["name"] . "<br>";
       // echo "type: " . $_FILES["imgfile"]["type"] . "<br>";
       // echo "size: " . ($_FILES["imgfile"]["size"] / 1024) . " kB<br>";
       // echo "temp location: " . $_FILES["imgfile"]["tmp_name"] . "<br>";


        if (file_exists("upload/" . $_FILES["imgfile"]["name"]))
        {    //        echo $_FILES["imgfile"]["name"] . " You already uploaded the image "."<br>";

           // echo"<br>"."<a href='/index.html ' style='color: crimson'>lets try again</a>";
        }
        else {

            move_uploaded_file($_FILES["imgfile"]["tmp_name"], "upload/" . $_FILES["imgfile"]["name"]);
            //echo "image loaction in server: " . "upload/" . $_FILES["imgfile"]["name"]. "<br>";
            //echo"<a href='/index.html ' style='color: crimson'>lets try again</a>"."<br>";
        }
            $output = shell_exec('C:\Users\lenovo\AppData\Local\Programs\Python\Python36\python.exe predict.py -f upload/'.$_FILES["imgfile"]["name"]);
            //$output = shell_exec('sudo python predict.py -f upload/'.$_FILES["imgfile"]["name"]);
            //$output = shell_exec('python3 predict.py '."-f upload/".$_FILES["imgfile"]["name"]);
            $t=$output;
            //rename("upload/" . $_FILES["imgfile"]["name"],"upload/" ."pictures.jpg");
            //if($output=='Common wheat')
            //{
            //    echo "FQ"."<br>";
            //}
            //else{
            //    echo "Common wheat ";
            //    echo $output;
            //}
            $kl="upload/" . $_FILES["imgfile"]["name"];
           // echo"We believe this plant belongs to ".$output;
            //sleep(5);
            //echo"<script>window.open('/'.$output);</script>";
            //echo(gettype($output));
            //echo(strlen($output));
            //function abc($output){
            //   echo ("<script>window.open('/'.$output);</script>");
            //}
            //echo abc($output);
            //echo(strlen('Common wheat '));
            //echo $t;
            //$t=0;



            if($t==0)
            {
                echo"We believe this plant belongs to Black-grass ";
                //sleep(2);
                setcookie('mycookie',$kl);
                echo ("<script>self.location=('/Black-grass.php');</script>");


            }
            if($t==1)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Charlock ";
                //sleep(2);
                echo ("<script>self.location=('/Charlock.php');</script>");
            }
            if($t==2)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Cleavers ";
                //sleep(2);
                echo ("<script>self.location=('/Cleavers.php');</script>");
            }
            if($t==3)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Common Chickweed";
                //sleep(2);
                echo ("<script>self.location=('/Common-Chickweed.php');</script>");
            }
            if($t==4)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Common wheat ";
                //sleep(2);
                echo ("<script>self.location=('/Common-wheat.php');</script>");
            }
            if($t==5)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Fat Hen ";
                //sleep(2);
                echo ("<script>self.location=('/Fat-Hen.php');</script>");
            }

            if($t==6)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Loose Silky-bent ";
                //sleep(2);
                echo ("<script>self.location=('/Loose-Silky-bent.php');</script>");
            }
            if($t==7)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Maize ";
                //sleep(2);
                echo ("<script>self.location=('/Maize.php');</script>");
            }
            if($t==8)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Scentless Mayweed ";
                //sleep(2);
                echo ("<script>self.location=('/Scentless-Mayweed.php');</script>");
            }
            if($t==9)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Shepherds Purse ";
                //sleep(2);
                echo ("<script>self.location=('/Shepherds-Purse.php');</script>");
            }
            if($t==10)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Small-flowered Cranesbill";
                //sleep(2);
                echo ("<script>self.location=('/Small-flowered-Cranesbill.php');</script>");
            }
            if($t==11)
            {setcookie('mycookie',$kl);
                echo"We believe this plant belongs to Sugar beet";
                //sleep(2);
                echo ("<script>self.location=('/Sugar-beet.php');</script>");
            }



}
}
else
{
    echo "something wrong, maybe yous should try a smaller one(jpg jpeg)"."<br>";
    echo"<a href='/index.html ' style='color: crimson'>lets try again</a>";
}
?>

