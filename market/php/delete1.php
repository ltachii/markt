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
        $thesql = "select * from regcheck where rid = '$id'";
        $theresult = mysql_query($thesql);
        $therow = mysql_fetch_array($theresult);
        $theuser = $therow['username'];
        
    	$sql_delete = "delete from regcheck where rid = '$id'";
        $theresult = mysql_query($sql_delete);
        if($theresult)  
        {  
            $sql = "select * from content";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result))
            {
               $sql_delete1 = mysql_query("delete from content where  username = '$theuser'");
            }

            $sql1 = "select * from comment";
            $result1 = mysql_query($sql1);
            while($row1 = mysql_fetch_array($result1))
            {
                $sql_delete2 = mysql_query("delete from comment where othername = '$theuser'");
            }

            $sql2 = "select * from want";
            $result2 = mysql_query($sql2);
            while($row2 = mysql_fetch_array($result2))
            {
               $sql_delete3 = mysql_query("delete from want where  username = '$theuser'");
            }
            if($sql_delete){
                echo "<script>alert('删除成功！');history.go(-1);</script>";
            }
            else
            {
                echo "<script>alert('删除失败！');</script>";
            }
        }  
        else  
        {  
            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1); </script>";  
        }
    }
?>