<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理员-西瓜校园</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pace-theme-flash.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">
<script src="js/hm.js.下载"></script>
<script type="text/javascript">var numberRock = 1343</script>
<link rel="stylesheet" type="text/css" href="css/swiper-3.4.2.min.css">
<link rel="stylesheet" type="text/css" href="css/goods.css">
<link rel="stylesheet" href="css/layer.css" id="layui_layer_skinlayercss" style="">
</head>



<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://www.youzixy.com/sale#">
            <img alt="Brand" src="images/56d79224723a5.png">
        </a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
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
			            鲁东大学			        
                    </div>
		        </a>
		    </div>
		    <div class="change">
		        <a href="main.php" class="switch">二手市场</a>
		    </div>
		</li>
		<a href="admin.php" class="clearfix">
			<li class="item clearfix text-center current">
				<div class="icon pull-left">
					<i class="icon iconfontitems"></i>
				</div>
				<div class="title pull-left">
					商品管理
				</div> 			
			</li>
		</a> 		
		<a href="admin1.php" class="clearfix">
			<li class="item clearfix text-center ">
				<div class="icon pull-left">
					<i class="icon iconfontitems"></i>
				</div>
				<div class="title pull-left">
					用户管理
				</div> 			
			</li>
		</a> 	
		<a href="admin2.php" class="clearfix">
			<li class="item clearfix text-center ">
				<div class="icon pull-left">
					<i class="icon iconfontitems"></i>
				</div>
				<div class="title pull-left">
					添加分类
				</div> 			
			</li>
		</a>
        <a href="admin3.php" class="clearfix">
            <li class="item clearfix text-center current">
                <div class="icon pull-left">
                    <i class="icon iconfontitems"></i>
                </div>
                <div class="title pull-left">
                    商品审核
                </div>          
            </li>
        </a>
        <a href="admin4.php" class="clearfix">
            <li class="item clearfix text-center">
                <div class="icon pull-left">
                    <i class="icon iconfontitems"></i>
                </div>
                <div class="title pull-left">
                    用户审核
                </div>          
            </li>
        </a>	 	
	<li class="back" style="top: 111px; width: 134px; height: 55px;"><div class="left"></div></li></ul>
</div>
    <div class="sidebar">
    <div class="erweima">
        <a class="qq" href="tencent://message/?uin=307242951&amp;Site=QQ%E4%BA%A4%E8%B0%88&amp;Menu=yes" target="_blank"></a>
        <a href="http://weibo.com/u/276233227/" class="wb"></a>
    </div>
    <!-- <div class="adphone">

    </div> -->
</div>

    <div class="main">
        <div class="box">
            
            <div class="school-box">
                <div class="outer-school" style="padding-left: 32px;padding-right: 32px;">
                    <div class="inner-box">
                        <div class="order">
                        </div>
                    </div>
                </div>
            </div>
            <ul class="goodsbox clearfix">
                <?php
                $server="localhost";//主机
                $db_username="root";//数据库用户名
                $db_password="root";//数据库密码
                $con = mysql_connect("localhost","root","root");//链接数据库
                mysql_select_db('regest',$con);//选择数据库
                $sql = "select * from content where examine = 0 order by price";
                $result = mysql_query($sql);
                date_default_timezone_set("Asia/Shanghai");
                while($row = mysql_fetch_array($result))
                {
                ?>
                <div style="width: 1132px;height: 150px;background: #ffffff; margin: 35px 0 0 31px;">
                    <div style="width: 1132px;height: 20px;">
                    </div>
                    <div style="width: 100px;height: 150px; margin-left:31px;float: left;">
                        <img src="images/photo/<?php
                                            $conn = mysql_connect("localhost","root","root");
                                            mysql_select_db('regest',$conn);
                                            $sqll = "select * from regcheck where username = '$row[username]'";
                                            $resultt = mysql_query($sqll);
                                            $roww = mysql_fetch_array($resultt);
                                            echo $roww['photo']; ?>" style="width: 70px;height: 70px;border-radius: 35px;">
                        <p style="color: rgb(58,58,58);font-size: 16px; margin: 10px 0 0 20px;"><?php echo $roww['username']; ?></p>
                    </div>
                    <div style="width: 950px;height: 100px;float: left;">
                        <p style="    color: rgb(58,58,58);font-size: 17px;font-weight: normal;line-height: 120%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?php echo $row['title']; ?></p>
                        <p style="    color: #1BC06C;font-size: 16px;line-height: 100%;margin-top: 10px;word-break: break-all;"><?php echo $row['content']; ?></p>
                    </div>
                    <div style="width: 60px; height: 20px;  position:absolute; left: 1200px;" onclick="window.location.href='loginout.php';">

                            <a href="php/examine.php?id=<?php echo $row['id'];?>">同意发布</a>

                    </div>
                </div>
            <?php  
            }
            ?>
                              
                    </ul>
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
    <p class="copyright">版权所有 © All Rights Reserved，桂ICP备15000254号-1
        <script language="javascript" type="text/javascript" src="js/19251633.js.下载"></script>
    </p>
</div>

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
<script type="text/javascript" src="js/jquery.lazyload.js.下载"></script>
<script type="text/javascript" src="js/swiper-3.4.2.jquery.min.js.下载"></script>
<script type="text/javascript" src="js/goods.js.下载"></script>
</body>
</html>