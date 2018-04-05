<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>用户中心首页-西瓜校园</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pace-theme-flash.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">
<script src="js/hm.js.下载"></script>
<script type="text/javascript">var numberRock = 1343</script>
<link rel="stylesheet" href="css/info.css" type="text/css">
<link rel="stylesheet" href="css/layer.css" id="layui_layer_skinlayercss" style="">
</head>


<?php
        $server="localhost";//主机
        $db_username="root";//数据库用户名
        $db_password="root";//数据库密码
        $con = mysql_connect("localhost","root","root");//链接数据库
        mysql_select_db('regest',$con);//选择数据库
        date_default_timezone_set("Asia/Shanghai");

        $id = $_GET['id'];
        $sql2 = "select * from content where username = '".$id."'";
        $result2 = mysql_query($sql2);
        $row2 = mysql_fetch_array($result2);
        $thename = $row2['username'];

        if($id){
            $sql = "select * from regcheck where username = '$thename' ";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
        }

        ?>

<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://www.youzixy.com/user#">
            <img alt="Brand" src="images/56d79224723a5.png">
        </a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="js-nav-slide">
                <li class="current">
                    <a href="school.php">首页
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="">
                    <a href="main.php">全部</a>
                </li>
                <li class="">
                    <a href="wantmain.php">求购</a>
                </li>
                
            <li class="back" style="left: 0px; width: 66px; overflow: hidden;"><div class="left"></div></li></ul>
            <form class="navbar-form navbar-right search-box" onsubmit="return false;">
                <div class="form-group pull-left">
                                            <input name="keyword" type="text" id="serachWord" class="form-control search-field" placeholder="搜索一下..." onclick="location.href='sousuo.php';">                </div>
                <button type="submit" onclick="toSearch()" class="btn btn-default pull-left search-btn" >搜索</button>
            </form>
        </div>
    </div>
</nav>

    <link rel="stylesheet" href="css/iconfont.css" type="text/css">
<div class="item-box">
	<ul class="all-item" id="js-sale-item">
		<li class="item clearfix text-center school">
		    <div class="college">
		        <div>
		        	<i class="icon iconfontitems"></i>
		        </div>
		        <a href="#">
			        <div class="now">
			            			                鲁东大学			        </div>
		        </a>
		    </div>
		    <div class="change">
		        <a href="#" class="switch">二手市场</a>
		    </div>
		</li>
		<a href="main.php" class="clearfix">
			<li class="item clearfix text-center current">
				<div class="icon pull-left">
					<i class="icon iconfontitems"></i>
				</div>
				<div class="title pull-left">
					所有分类
				</div> 			
			</li>
		</a> 	
		
        <?php
                $server="localhost";//主机
                $db_username="root";//数据库用户名
                $db_password="root";//数据库密码
                $con = mysql_connect("localhost","root","root");//链接数据库
                mysql_select_db('regest',$con);//选择数据库
                $sql1 = "SELECT * FROM classily";
                $result1 = mysql_query($sql1);
                while($row1 = mysql_fetch_array($result1))
                {
                ?> 

                <a href="other.php?id=<?php echo $row1['id'];?>" class="clearfix">
                <li class="item clearfix text-center ">
                <div class="icon pull-left">
                    <i class="icon iconfontitems"></i>
                </div>
                <div class="title pull-left">
                    <?php echo $row1['thename']; ?>
                </div>
                </li>
                </a>
                  <?php  
            }
            ?>	
	<li class="back" style="top: 111px; width: 134px; height: 55px; overflow: hidden;"><div class="left"></div></li></ul>
</div>
    <div class="sidebar">
    <div class="btn block">
        <div class="ershou">
            <a href="send.php">发布二手</a>
        </div>
        <div class="ershou">
            <a href="want.php">发布求购</a>
        </div>
    </div>
    <div class="erweima">
        <a class="qq" href="tencent://message/?uin=307242951&amp;Site=QQ%E4%BA%A4%E8%B0%88&amp;Menu=yes" target="_blank"></a>
        <a href="http://weibo.com/u/276233227/" class="wb"></a>
    </div>
    <!-- <div class="adphone">

    </div> -->
</div>

    <div class="main center">
        <link rel="stylesheet" href="css/infohead.css">
<link rel="stylesheet" type="text/css" href="css/cropper.min.css">
<form action="php/userinform.php" method="post" enctype="multipart/form-data" id="myform">
        <input type="file" name="file" style="width: 180px; height: 180px; background: red; position: absolute; top:120px; left: 200px;z-index: 1; opacity: 0;" onchange="test()"/>
        <script type="text/javascript">
            function test()
            {
                document.getElementById("myform").submit();
            }
        </script>
    </form>
<div class="top clearfix">
    <div id="user_photo" class="pull-left">
         <img id="origin_ph" src="images/photo/<?php
                $conn = mysql_connect("localhost","root","root");
                mysql_select_db('regest',$conn);
                $sqll = "select * from regcheck where username = '$thename'";
                $resultt = mysql_query($sqll);
                $roww = mysql_fetch_array($resultt);
                echo $roww['photo']; ?>" alt="头像">
         <img data-toggle="modal" data-target="#myModal" id="change_ph" src="images/mkhead_hover.png" alt="头像" style="display: none;">
    </div>
    <div id="user_msg">
        <div class="name">
           <?php echo $row['username']; ?></div>
        <ul class="seller_attr">
            <li>学校：&nbsp;&nbsp;<span>鲁东大学</span></li>
            <li>签名：&nbsp;&nbsp;<span class="user_qianming"><?php echo $row['synopsis']; ?></span></li>
        </ul>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">上传头像</h4>
          </div>
          <div class="modal-body">
                <div class="avatar-box">
                    <div class="avatar-content">
                        <div class="avatar-container">
                            <img id="cropper-img" class="cropper-img" src="http://www.youzixy.com/user">
                        </div>
                        <div class="avatar-preview">
                            <div class="pre120 preview-img" style="width: 120px;height: 120px;">
                            </div>
                            <div class="pre100 preview-img" style="width: 100px;height: 100px;">
                            </div>
                            <div class="pre60 preview-img" style="width: 60px;height: 60px;">
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="button-group">
                        <ul class="cropper-button">
                            <li class="choose_img">
                            选择图片
                            <input onchange="choose_img(this)" type="file">
                            </li>
                            <li onclick="zoom_out()">放大</li>
                            <li onclick="zoom_in()">缩小</li>
                            <li onclick="rotate_avator()">旋转</li>
                            <li onclick="upload_avator()">确定裁剪</li>
                        </ul>
                    </div>
                </div>
          </div>
        </div>
    </div>
</div>

<div class="favor-box">

<?php
        $sql = "select * from shoucang where myname = '$thename'";
        $result = mysql_query($sql);
        date_default_timezone_set("Asia/Shanghai");
        while($row = mysql_fetch_array($result))
        {
            $theid = $row['thekey'];
            $sql1 = "select * from content where id = '$theid'";
            $result1 = mysql_query($sql1);
            $row1 = mysql_fetch_array($result1)
        ?> 

                <div id="my_enshrine">
                    <div style="height: 130px; width: 100%">
                                <a class="clearfix pull-left" href="content.php?id=<?php echo $row1['id'];?>">
                                        <img src="images/user/<?php echo $row1['image']; ?>" class="enshr_ph" style="height: 120px;width: 120px; float: left;">
                                    </a>
                                                                    <div class="enshr_info">
                                    <h2 style="text-indent: 10px;"><a href="content.php?id=<?php echo $row1['id'];?>"><?php echo $row1['title']; ?></a></h2>
                                    <p style="text-indent: 10px;"><?php echo $row1['content']; ?></p>
                            </div>                       <div class="text-center">
                            <nav><ul class="pagination"></ul></nav>                        </div>
                                    </div>
               <?php
        }
        ?>
        </div>
        <div class="common-footer">
    <div class="footerNav">
        <ul class="fn">
            <li><span class="fnIco"></span><a href="main.php">所有分类</a></li>
            <li><span class="fnIco"></span><a href="login.php">我要登录</a></li>
            <li><span class="fnIco"></span><a href="registration.php">我要注册</a></li>
            <li><span class="fnIco"></span><a href="loginout.php">我要注销</a></li>
        </ul>
    </div>
    <div class="footerMain">
        <a href="http://www.youzixy.com/index/index" class="fLogo" style="background: url(/Uploads/web/2016-03-03/56d792288071d.png);">西瓜校园-专注校园二手</a>
        <div class="fContact">
            <h3 class="fct">联系我们 / <span>contact us</span></h3>
            <p>Q群：433981852</p>
            <p>Q Q：307242951</p>
            <p>地址：鲁东大学</p>
        </div>
        <div class="fEwm">
            <img width="106" height="106" alt="微信公众号" src="images/56d792395ebe9.png">
            <p>关注微信公众平台</p>
        </div>
        <div class="fCall">
            <p class="callN">TEL:18176406629</p>
            <span class="kfT">24小时在线客服</span>
            <a class="fxl" href="http://weibo.com/u/276233227/" target="_blank">新浪微博</a>
            <a class="fqq" href="tencent://message/?uin=307242951&amp;Site=QQ%E4%BA%A4%E8%B0%88&amp;Menu=yes" target="_blank">客服QQ</a>
            <a class="fwx tips">微信二维码</a>
        </div>
    </div>
    <p class="copyright">版权所有 © All Rights Reserved，桂ICP备15000254号-1</p>
</div>

    </div>

<!-- 全局js -->
<script src="js/jquery.min.js.下载"></script>
<script src="js/bootstrap.min.js.下载"></script>
<script src="js/layer.min.js.下载"></script>
<script src="js/jquery.lavalamp.js.下载"></script>
<script src="js/pace.min.js.下载"></script>
<script src="js/count.js.下载"></script>
<script src="js/common.js.下载"></script>
<!-- 51统计 -->
<script language="javascript" type="text/javascript" src="js/19251633.js.下载"></script>
<script type="text/javascript" src="js/cropper.min.js.下载"></script>
<script type="text/javascript" src="js/mkhead.js.下载"></script>
<script src="js/info.js.下载"></script>
</body>
</html>