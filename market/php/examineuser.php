<?php
    header("Content-type:text/html;charset=utf-8");
    $server="localhost";//主机
    $db_username="root";//数据库用户名
    $db_password="root";//数据库密码
    $con = mysql_connect("localhost","root","root");//链接数据库
    mysql_select_db('regest',$con);//选择数据库
    $id = $_GET['id'];
    
    $result = mysql_query("UPDATE regcheck SET examine = 1 WHERE rid = $id");
    if($result){
    	echo "<script>alert('您已同意发布！'); history.go(-1);</script>";
    }else
    {
    	echo "<script>alert('系统繁忙，请稍后重试！'); history.go(-1);</script>";
    }
?>