<?php
    session_start();
    header("Content-Type: text/html; charset=utf8");
    $id = $_GET['id'];
    $theuser = "$_SESSION[username]";
    if (isset($_SESSION["code"])){
        $server="localhost";
        $db_username="root";
        $db_password="root";
        $con = mysql_connect("localhost","root","root");
        mysql_select_db('regest',$con);
        $sql_delete = "delete from shoucang where thekey = '$id' and myname = '$theuser'";
        $theresult = mysql_query($sql_delete);
        if($theresult)  
        {  
            echo "<script>alert('取消收藏成功！');history.go(-1);</script>";  
        }  
        else  
        {  
            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1); </script>";  
        }
    }
?>