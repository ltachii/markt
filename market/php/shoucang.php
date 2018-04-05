<?php
    session_start();
    header("Content-type:text/html;charset=utf-8");
    $server="localhost";//主机
    $db_username="root";//数据库用户名
    $db_password="root";//数据库密码
    $con = mysql_connect("localhost","root","root");//链接数据库
    mysql_select_db('regest',$con);//选择数据库
    $theuser = "$_SESSION[username]";
    $thekey = $_GET['id'];
    if(isset($_SESSION["code"])){
        $sql_insert = "insert into shoucang (myname,thekey) values ('$theuser','$thekey')"; 
        $res_insert = mysql_query($sql_insert); 
        if($res_insert)  
        {  
            echo "<script>alert('收藏成功！');</script>";
        }  
        else  
        {  
            echo "<script>alert('收藏失败，请稍后重试！');history.go(-1);</script>";  
        }
    }else
    {
    	echo "<script>alert('请先登录！');</script>";
    }
?>