<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>商品详情</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pace-theme-flash.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">
<script src="js/hm.js.下载"></script>
<script type="text/javascript">var numberRock = 1343</script>
<link rel="stylesheet" href="css/iconfont.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/zzsc.css">
<link rel="stylesheet" type="text/css" href="css/goodsdis.css">
<link rel="stylesheet" href="css/iconfont(1).css" type="text/css">
<link rel="stylesheet" href="css/layer.css" id="layui_layer_skinlayercss" style="">
</head>
<body class="  pace-done">

<?php
        $server="localhost";//主机
        $db_username="root";//数据库用户名
        $db_password="root";//数据库密码
        $con = mysql_connect("localhost","root","root");//链接数据库
        mysql_select_db('regest',$con);//选择数据库
        date_default_timezone_set("Asia/Shanghai");
        $id = $_GET['id'];

        mysql_query("UPDATE content SET seenum = seenum+1 WHERE id = $id");


        if($id){
            $sql = "select * from content where id = '".$id."'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
        }
         ?> 



    <div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><link href="css/jiathis_share.css" rel="stylesheet" type="text/css"><iframe frameborder="0" style="position: absolute; display: none; opacity: 0;" src="css/saved_resource.html"></iframe><div class="jiathis_style" style="position: absolute; z-index: 1000000000; display: none; top: 50%; left: 50%; overflow: auto;"></div><div class="jiathis_style" style="position: absolute; z-index: 1000000000; display: none; overflow: auto;"></div><iframe frameborder="0" src="css/jiathis_utility.html" style="display: none;"></iframe>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://www.youzixy.com/sale/2211#">
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

    <link rel="stylesheet" href="css/iconfont(2).css" type="text/css">
<div class="item-box">
	<ul class="all-item" id="js-sale-item">
		<li class="item clearfix text-center school">
		    <div class="college">
		        <div>
		        	<i class="icon iconfontitems"></i>
		        </div>
		        <a href="#">
			        <div class="now">鲁东大学
			            			                			        </div>
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

    <div class="main">
        <div class="detail clearfix">
            <div class="picture">
                <div class="con-FangDa" id="fangdajing">
                  <div class="con-fangDaIMg">
                    <!-- 正常显示的图片-->
                        <img src="images/user/<?php echo $row['image']; ?>">
                                                <!-- 滑块-->
                        <div class="magnifyingBegin" style="display: none; left: 216px; top: 159.5px;"></div>
                        <!-- 放大镜显示的图片 -->
                        <div class="magnifyingShow" style="display: none;">
                            <img src="images/user/<?php echo $row['image']; ?>" style="margin-left: -648px; margin-top: -478.5px;">
                                                </div>
                      </div>
                      <ul class="con-FangDa-ImgList">
                        <!-- 图片显示列表 -->
                        <?php
                            $image = $row['image'];
                            $image1 = $row['image1'];
                            $image2 = $row['image2'];
                            $image3 = $row['image3'];

                            $allimg = array("$image","$image1","$image2","$image3","");
                            $i=0;
                            while($allimg[$i] != "" && $i<=3)
                            {
                            ?>
                                    
                                <li class="active"><img src="images/user/<?php echo $allimg[$i]; ?>" data-bigimg="images/user/<?php echo $allimg[$i]; ?>"></li>
                                   
                               
                                <?php 
                                    $i++; 
                                }
                                ?>
                        

                
                        </ul>
                </div>
            </div>
            <div class="info">
                <ul>
                    <li class="title">
                        <?php echo $row['title']; ?>
                    </li>
                    <li class="price">
                          <span class="howmuch"><?php echo $row['price']; ?>元
                                                  </li>

            <?php
                $sqll1 = "select * from regcheck where username = '$row[username]'";
                $resultt1 = mysql_query($sqll1);
                $roww1 = mysql_fetch_array($resultt1); 
            ?>
    
                    <li class="contact1 same">
                        <span class="qq"><span class="iconfont"></span>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="text">
                        QQ：<?php echo $roww1['qq']; ?>                   </span>
                    </li>
                    <li class="contact1 same">
                        <span class="qq"><span class="iconfont"></span>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="text">
                        微信： <?php echo $roww1['wechat']; ?>                  </span>
                    </li>
                    <li class="contact1 same">
                        <span class="qq"><span class="iconfont"></span>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="text">
                        电话：<?php echo $roww1['phone']; ?>                  </span>
                    </li>
                    <li class="time same">
                        <span class=""><span class="iconfont"></span>&nbsp;&nbsp;&nbsp;</span><span class="text"><?php echo $row['thetime']; ?></span>
                    </li>
            
                    <li>
                    <script type="text/javascript" src="js/jia.js.下载" charset="utf-8"></script><script type="text/javascript" src="js/plugin.client.js.下载" charset="utf-8"></script>
                    </li>
                    <li>
                        <iframe name='ifr' id="ifr" style='display: none;'></iframe>
                        <form action="php/shoucang.php?id=<?php echo $id; ?>" method="post" target='ifr'>
                            <input value="收藏" class="btn btn-success" type="submit" name="thecol">
                            <a href="php/delwant.php?id=<?php echo $id; ?>" class="btn btn-success">取消收藏</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ershou-desc">
            <div class="desc clearfix">
                <a href="">
                    <img src="images/photo/<?php echo $roww1['photo']; ?>" id="user_ph">
                                    </a>
                <span id="user_cmt">
                    <?php echo $row['content']; ?>
                </span>
            </div>
        </div>
        <div class="commonbox">
            <div class="commontip">评论</div>
            <div class="box">
                <ul class="reply-list" id="reply-list">
                    <?php
                $sql = "select * from comment where thekey = '$id'";
                $result = mysql_query($sql);
                date_default_timezone_set("Asia/Shanghai");
                while($row = mysql_fetch_array($result))
                {
                ?> 
                    <li class="list-item clearfix">
                        <div class="head">
                            <img src="images/photo/<?php
                                            $conn = mysql_connect("localhost","root","root");
                                            mysql_select_db('regest',$conn);
                                            $sqll = "select * from regcheck where username = '$row[othername]'";
                                            $resultt = mysql_query($sqll);
                                            $roww = mysql_fetch_array($resultt);
                                            echo $roww['photo']; ?>">
                        </div>
                        <div class="text">
                            <div class="user clearfix">
                                <div class="username">
                               </div>
                                <div class="info">
                                    <span class="reply-time"><?php echo $row['lasttime']; ?></span>
                                    <span class="reply" id="reply" onclick="comeDiv()">回复</span>
                                    <form action="php/reply.php?id=<?php echo $row['tid'];?>" method="post" style="display:none;" id="replyform"> 
                                        <input type="text" name="content1">
                                        <input type="submit" name="submit1">
                                    </form>

                                    <script type="text/javascript">
                                        function comeDiv(){
                                        var thep = document.getElementById("replyform");
                                        if(thep.style.display != "")
                                        {
                                            thep.style.display = "block";
                                        }
                                        else if(thep.style.display == "block")
                                        {
                                            thep.style.display = "none";
                                        }

                                        }none
                                    </script>
                                </div>
                            </div>
                            <p class="detail" style="padding-left: 0;">
                                <?php echo $row['comm']; ?>                           </p>
                        </div>
                    <?php
                    $theid = $row['tid'];
                $sql3 = "select * from huifu where thekey = '$theid'";
                $result3 = mysql_query($sql3);
                date_default_timezone_set("Asia/Shanghai");
                while($row3 = mysql_fetch_array($result3))
                {
                ?> 
                <li class="list-item clearfix">
                        <div class="head">
                        </div>
                        <div class="text">
                            <div class="user clearfix">
                                <div class="username">
                               </div>
                            </div>
                            <p class="detail" style="padding-left: 0;">
                               <?php echo $row3['username']; ?> 回复 ：<?php echo $row3['comm']; ?>
                            </p>
                        </div>
                        </li>
                    <?php  
            }
            ?>
            </li>
                     <?php  
            }
            ?>
                                </ul>
                                <p> 回复 <?php echo $row['username']; ?> ：</p>
                <div class="common">
                                            <img src="images/pleaselogin.png">
                    <form action="php/commit.php?id=<?php echo $id; ?>" method="post">
                        <input value="您要登录之后才可以评论哦！" type="text" name="content" id="commoncontent" onfocus="if(value =='您要登录之后才可以评论哦！'){value =''}" onblur="if (value ==''){value='您要登录之后才可以评论哦！'}">
                        <input type="submit" id="commonbtn" class="commonbtn" name="submit" value="发送"></div>
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
        <a href="http://www.youzixy.com/index/index" class="fLogo" style="background: url(/Uploads/web/2016-03-03/56d792288071d.png);">柚子校园-专注校园二手</a>
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
    <p class="copyright">版权所有 © All Rights Reserved，鲁ICP备66666666号-6       
        <script language="javascript" type="text/javascript" src="js/19251633.js.下载"></script>
    </p>
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

<script type="text/javascript" class="library" src="js/jquery.colorbox-min.js.下载"></script>
<script type="text/javascript" class="library" src="js/zzsc.js.下载"></script>
<script src="js/goodsdis.js.下载"></script>
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="cboxIE" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxLoadedContent" style="width: 0px; height: 0px; overflow: hidden; float: left;"></div><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><div id="cboxNext" style="float: left;"></div><div id="cboxPrevious" style="float: left;"></div><div id="cboxSlideshow" style="float: left;"></div><div id="cboxClose" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>