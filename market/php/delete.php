<?php
    session_start();
    header("Content-Type: text/html; charset=utf8");
    $id = $_GET['id'];
    if (isset($_SESSION["code"])){
    	$server="localhost";//主机
        $db_username="root";//数据库用户名
        $db_password="root";//数据库密码
        $con = mysql_connect("localhost","root","root");//链接数据库
        mysql_select_db('regest',$con);//选择数据库
    	$sql_delete = "delete from content where id = '$id'";
        $theresult = mysql_query($sql_delete);
        if($theresult)  
        {  
            echo "<script>alert('删除成功！');history.go(-1);</script>";  
        }  
        else  
        {  
            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1); </script>";  
        }
    }
?>