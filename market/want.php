<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>发布二手商品-西瓜校园</title>
<link rel="shortcut icon" href="http://www.youzixy.com/Public/images/icon/favicon.ico" type="image/x-icon">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pace-theme-flash.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">
<script src="js/hm.js.下载"></script><script type="text/javascript">var numberRock = 1343</script>
<link href="css/chosen.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/webuploader.css">
<link rel="stylesheet" type="text/css" href="css/webuploader-demo.css">
<link rel="stylesheet" type="text/css" href="css/sale.css">
<link rel="stylesheet" href="css/layer.css" id="layui_layer_skinlayercss" style="">
</head>





<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://www.youzixy.com/release/sale#">
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
                                            <input name="keyword" type="text" id="serachWord" class="form-control search-field" placeholder="搜索一下..." onclick="location.href='sousuo.php';">                </div>
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
		        <a href="http://www.youzixy.com/saleschool">
			        <div class="now">
			            			                鲁东大学			        </div>
		        </a>
		    </div>
		    <div class="change">
		        <a href="http://www.youzixy.com/saleschool" class="switch">二手市场</a>
		    </div>
		</li>
		<a href="http://www.youzixy.com/sale/querysale/type/0" class="clearfix">
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
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>发布二手信息</h5>
            </div>
            <div class="ibox-content">
                <form action="php/want.php" method="post"  enctype="multipart/form-data" class="form-horizontal m-t">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">标题：</label>
                        <div class="col-sm-8">
                            <input name="title" class="required form-control" type="text" placeholder="请输入标题" aria-required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">详情：</label>
                        <div class="col-sm-8">
                            <textarea name="content" placeholder="请输入详情" class="form-control" type="text" aria-required="true" aria-invalid="false"></textarea>
                        </div>
                    </div>
            
                    <div class="form-group">

                    <div class="form-group">
                        <label class="col-sm-3 control-label">预期价格：</label>
                        <div class="pre-price input-group m-b col-sm-8">
                            <input name="price" type="text" class="form-control"> <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-3">
                            <input type="submit" class="btn btn-primary btn-block" value="确定发布" name="submit">
                        </div>
                    </div>
        
                        </div>               
                </form>
            </div>
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
<script language="javascript" type="text/javascript" src="js/19251633.js.下载"></script>
<script type="text/javascript" src="js/jquery.form-4.2.1.min.js.下载"></script>
<script src="js/chosen.jquery.js.下载"></script>
<script src="js/jquery.validate.min.js.下载"></script>
<script src="js/messages_zh.min.js.下载"></script>
<script src="js/webuploader.min.js.下载"></script>
<script src="js/upload.js.下载"></script>
<script type="text/javascript" src="js/sale.js.下载"></script>
</body></html>