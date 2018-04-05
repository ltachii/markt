<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>二手物品列表-西瓜校园</title>
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
            <ul class="nav navbar-nav" id="js-nav-slide">
                <li>
                    <a href="school.php">首页
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="current">
                    <a href="#">全部</a>
                </li>
                <li class="">
                    <a href="wantmain.php">求购</a>
                </li>
                
        </ul>

            <ul class="nav navbar-nav navbar-right login-box">
                <li>
                        <a class="headpic-link" href="geren.php?id=<?php session_start(); $user = $_SESSION['username']; echo $user; ?>">
                            <img class="headpic" src="images/photo/<?php 
                        header("Content-Type: text/html; charset=utf8");
                        if (isset($_SESSION["code"])){
                            $conn = mysql_connect("localhost","root","root");
                            mysql_select_db('regest',$conn);
                            $sqll = "select * from regcheck where username = '$_SESSION[username]'";
                            $resultt = mysql_query($sqll);
                            $roww = mysql_fetch_array($resultt);
                            echo $roww['photo']; 
                        }else
                        {
                            echo "default1.png";
                        }
                    ?>">
                        </a>
                    </li>
                <li>
                    <a href="geren.php?id=<?php  echo $user; ?>">
                        <?php 
                        header("Content-Type: text/html; charset=utf8");
                        if (isset($_SESSION["code"])){
                            $theuser = "$_SESSION[username]";
                            echo $theuser;
                        }
                    ?></a>
                </li>           
            </ul>
            <form class="navbar-form navbar-right search-box" onsubmit="return false;">
                <div class="form-group pull-left">
                    <input name="keyword" type="text" id="serachWord" class="form-control search-field" placeholder="搜索一下" onclick="location.href='sousuo.php';">
                </div>
                <button type="submit" onclick="toSearch()" class="btn btn-default pull-left search-btn">搜索</button>
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
			            鲁东大学			        
                    </div>
		        </a>
		    </div>
		    <div class="change">
		        <a href="#" class="switch">二手市场</a>
		    </div>
		</li>
		<a href="#" class="clearfix">
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
	<li class="back" style="top: 111px; width: 134px; height: 55px;"><div class="left"></div></li></ul>
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

    <div class="main">
        <div class="box">
            <div class="adv">
                <div class="banner" style="padding-left: 32px;padding-right: 32px;">
                    <div class="swiper-container swiper-container-horizontal swiper-container-fade">
                        <div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 976px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms;">
                                    <img class="swiper-lazy swiper-lazy-loaded" src="images/592eced4df770.png">
                                     
                                </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 976px; transform: translate3d(-976px, 0px, 0px); opacity: 1; transition-duration: 0ms;">
                                    <img class="swiper-lazy swiper-lazy-loaded" src="images/592ecef336aa2.png">
                                     
                                </div><div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 976px; transform: translate3d(-1952px, 0px, 0px); opacity: 1; transition-duration: 0ms;">
                                    <img class="swiper-lazy swiper-lazy-loaded" src="images/592eced4d71ec.png">
                                     
                                </div><div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 976px; transform: translate3d(-2928px, 0px, 0px); opacity: 0; transition-duration: 0ms;">
                                    <img class="swiper-lazy swiper-lazy-loaded" src="images/592eced562c5a.png">
                                     
                                </div><div class="swiper-slide" data-swiper-slide-index="3" style="width: 976px; transform: translate3d(-3904px, 0px, 0px); opacity: 0; transition-duration: 0ms;">
                                    <img class="swiper-lazy swiper-lazy-loaded" src="images/592eced4df770.png">
                                     
                                </div>                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 976px; transform: translate3d(-4880px, 0px, 0px); opacity: 0; transition-duration: 0ms;">
                                    <img class="swiper-lazy swiper-lazy-loaded" src="images/592ecef336aa2.png">
                                     
                                </div></div>
                        <!-- 如果需要分页器 -->
                        <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                        <!-- 如果需要导航按钮 -->
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
                    </div>
                </div>
            </div>
            <div class="school-box">
                <div class="outer-school" style="padding-left: 32px;padding-right: 32px;">
                    <div class="inner-box">
                        <div class="order">
                            <div class="order-line">
                                <a href="main.php" class="">
                                    价格
                                    <span class="aui-iconfontfa fa-arrows-v">
                                    </span>
                                </a>
                                <a class="active">
                                    热度
                                    <span class="aui-iconfontfa fa-arrows-v">
                                    </span>
                                </a>
                            </div>
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
                $sql = "select * from content where examine = 1 order by seenum desc";
                $result = mysql_query($sql);
                date_default_timezone_set("Asia/Shanghai");
                while($row = mysql_fetch_array($result))
                {
                ?>
                        <li class="items clearfix" style="margin-left: 32px;">
                            <div class="class-item">
                                <div class="class-bg-layer"></div>
                                <div class="class-item-bg">
                                    <a target="_blank" href="content.php?id=<?php echo $row['id'];?>" class="class-img">
                                        <img class="img-responsive lazyload" src="images/user/<?php echo $row['image']; ?>" data-original="/Uploads/salebuy/2018-01-27/5a6c3e4cdce76.jpg" style="display: block;">
                                                                            </a>
                                    <div class="pricehot clearfix">
                                        <span class="price">￥&nbsp;<span><?php echo $row['price']; ?></span></span>
                                        <span class="hot">点击数&nbsp;<span><?php echo $row['seenum']; ?></span></span>
                                    </div>
                                    <a target="_blank" href="content.php?id=<?php echo $row['id'];?>" class="title"><?php echo $row['title']; ?></a>
                                    <div class="some  clearfix">
                                        <span class="school">鲁东大学</span>
                                 
                                    </div>
                                </div>
                            </div>
                        </li>  
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