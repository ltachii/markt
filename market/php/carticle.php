<?php 
    session_start();
    header("Content-Type: text/html; charset=utf8");
    if (isset($_SESSION["code"])){
     
        if(isset($_POST["submit"]) && $_POST["submit"] == "确定修改")  
        {  
            $title = $_POST["title"];  
            $content = $_POST["content"];
            $price = $_POST["price"];   
            $theuser = "$_SESSION[username]";
            $id = $_GET['id'];
            if($title  == "" || $content == "")  
            {  
                echo "<script>alert('请填写完整！'); history.go(-1);</script>";  
            }  
            else  
            {  
                $server="localhost";//主机
                $db_username="root";//数据库用户名
                $db_password="root";//数据库密码
                $con = mysql_connect("localhost","root","root");//链接数据库
                mysql_select_db('regest',$con);//选择数据库
                
                $sql_update = mysql_query("UPDATE content SET title = '$title',content = '$content',price = '$price' WHERE id = $id");  
                if($sql_update)  
                {  
                    echo "<script>alert('修改成功！');</script>";
                    echo "<meta http-equiv=refresh content='0; url=../main.php'>";  
                }  
                else  
                {  
                    echo "<script>alert('系统繁忙，请稍候！');history.go(-1);</script>";  
                } 
            }      
        }  
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        } 
    }
    else
    {
        echo "<script>alert('请先登录！');</script>";
        echo "<meta http-equiv=refresh content='0; url=../login.php'>";
    } 
?>