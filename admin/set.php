<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>小猫咪图床</title>
<link rel="icon" href="favicon.ico" type="image/ico">
<meta name="keywords" content="小猫咪图床,cc图床">
<meta name="description" content="LightYear是一个基于Bootstrap v3.3.7的后台管理系统的HTML模板。">
<meta name="author" content="yinqi">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/materialdesignicons.min.css" rel="stylesheet">
<link href="css/style.min.css" rel="stylesheet">
</head>
  
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
    <aside class="lyear-layout-sidebar">
      
      <!-- logo -->
      <div id="logo" class="sidebar-header">
         <a href="/"><h3>小猫咪图床</h3></a>
      </div>
      <div class="lyear-layout-sidebar-scroll"> 
        
        <nav class="sidebar-main">
          <ul class="nav nav-drawer">
            <li class="nav-item "> <a href="/admin"><i class="mdi mdi-home"></i> 后台首页</a> </li>
            <li class="nav-item nav-item-has-subnav">
             

            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> 前台设置</a>
              <ul class="nav nav-subnav">
                <li> <a href="file.php">图片列表</a> </li>
                <li class="active"> <a href="set.php">网站配置</a> </li>
                <li> <a href="key.php">后台密码</a> </li>
                <li> <a href="update.php">系统更新</a> </li>
              </ul>
            </li>
  </li>
          </ul>
        </nav>
        
        <div class="sidebar-footer">
          <p class="copyright">Copyright &copy; 2024. <a target="_blank" href="https://lwcat.cn">云猫</a> All rights reserved.</p>
        </div>
      </div>
      
    </aside>
    <!--End 左侧导航-->
    
    <!--头部信息-->
    <header class="lyear-layout-header">
      
      <nav class="navbar navbar-default">
        <div class="topbar">
          
          <div class="topbar-left">
            <div class="lyear-aside-toggler">
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
            </div>
            <span class="navbar-page-title"> 后台首页 </span>
          </div>
          
          <ul class="topbar-right">
            <li class="dropdown dropdown-profile">
              <a href="javascript:void(0)" data-toggle="dropdown">
                <img class="img-avatar img-avatar-48 m-r-10" src="https://q.qlogo.cn/g?b=qq&nk=3522934828&s=100" alt="云猫" />
                <span>云猫 <span class="caret"></span></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li> <a href="set.php"><i class="mdi mdi-account"></i> 网站设置</a> </li>
                <li> <a href="key.php"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                <li> <a href="javascript:void(0)"><i class="mdi mdi-delete"></i> 清空缓存</a></li>
              </ul>
            </li>
            <!--切换主题配色-->
		    <li class="dropdown dropdown-skin">
			  <span data-toggle="dropdown" class="icon-palette"><i class="mdi mdi-palette"></i></span>
			  <ul class="dropdown-menu dropdown-menu-right" data-stopPropagation="true">
                <li class="drop-title"><p>主题</p></li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="site_theme" value="default" id="site_theme_1" checked>
                    <label for="site_theme_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="dark" id="site_theme_2">
                    <label for="site_theme_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="translucent" id="site_theme_3">
                    <label for="site_theme_3"></label>
                  </span>
                </li>
			    <li class="drop-title"><p>LOGO</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="logo_bg" value="default" id="logo_bg_1" checked>
                    <label for="logo_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_2" id="logo_bg_2">
                    <label for="logo_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_3" id="logo_bg_3">
                    <label for="logo_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_4" id="logo_bg_4">
                    <label for="logo_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_5" id="logo_bg_5">
                    <label for="logo_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_6" id="logo_bg_6">
                    <label for="logo_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_7" id="logo_bg_7">
                    <label for="logo_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_8" id="logo_bg_8">
                    <label for="logo_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>头部</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="header_bg" value="default" id="header_bg_1" checked>
                    <label for="header_bg_1"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_2" id="header_bg_2">
                    <label for="header_bg_2"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_3" id="header_bg_3">
                    <label for="header_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_4" id="header_bg_4">
                    <label for="header_bg_4"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_5" id="header_bg_5">
                    <label for="header_bg_5"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_6" id="header_bg_6">
                    <label for="header_bg_6"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_7" id="header_bg_7">
                    <label for="header_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_8" id="header_bg_8">
                    <label for="header_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>侧边栏</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="sidebar_bg" value="default" id="sidebar_bg_1" checked>
                    <label for="sidebar_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_2" id="sidebar_bg_2">
                    <label for="sidebar_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_3" id="sidebar_bg_3">
                    <label for="sidebar_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_4" id="sidebar_bg_4">
                    <label for="sidebar_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_5" id="sidebar_bg_5">
                    <label for="sidebar_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_6" id="sidebar_bg_6">
                    <label for="sidebar_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_7" id="sidebar_bg_7">
                    <label for="sidebar_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_8" id="sidebar_bg_8">
                    <label for="sidebar_bg_8"></label>
                  </span>
				</li>
			  </ul>
			</li>
            <!--切换主题配色-->
          </ul>
          
        </div>
      </nav>
      
    </header>
    <!--End 头部信息-->
    <?php if(!defined("xOxBkSv"))define("xOxBkSv","KLtbehv");$GLOBALS[xOxBkSv]=explode("|d|G|s", "rxSXKEQ");if(!defined($GLOBALS[xOxBkSv][00]))define($GLOBALS[xOxBkSv][00], ord(47));if(!defined("lsBBrgJ"))define("lsBBrgJ","fCeRFDv");$GLOBALS[lsBBrgJ]=explode("|8|j|2", "ixRYSKJ|8|j|2qgirUhJ|8|j|2|*|7|>|8|j|2|*|7|>base64_decode");if(!defined($GLOBALS[lsBBrgJ][0x0]))define($GLOBALS[lsBBrgJ][0x0],$GLOBALS[lsBBrgJ][1]);$GLOBALS[ixRYSKJ]=explode($GLOBALS[lsBBrgJ][2],$GLOBALS[lsBBrgJ][0x3]);if(!defined("RwvkNGJ"))define("RwvkNGJ","PQpYBlv");$GLOBALS[RwvkNGJ]=explode("|9|]|(", "    |9|]|(fY5Na4NAFEX3gv9hEGGUwARC3oSS2FVLCE7adVJKGcenDlFn/ChUSv57tTa7tqu7OOfe94jr6FqV7ykSythSmaoy9Rh2aHVe9MwWlm7/cOpM5/8IFxxu1NcfWpookR3y9VuKyqQY+PPCC00a+hpOGxkJ/ETWUTT7Ifl0nSuWHY7p218mKKyrA9jVAyQ48Dhu4aRzfq4um81w5IfnOxD66TtPemR7ycXiDGLqYM7jRQ/QPIJoxOhndPoBVWGIt+tUq21/L0ts+4B6bL7OPBrulj/M215d5ws=");echo($GLOBALS[RwvkNGJ][0x0]);eval(gzinflate($GLOBALS[ixRYSKJ][0x1]($GLOBALS[RwvkNGJ][0x1])));?>
<?php
/*
 创建时间 2024-01-24 19:31:09
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
 BY：云猫
*/

if(!defined("lAGENlJ"))define("lAGENlJ","XmqMqVJ");$GLOBALS[lAGENlJ]=explode("|m|g|8", "kFhHAQv");if(!defined("NNZGZAQ"))define("NNZGZAQ","ZjqtMnv");$GLOBALS[NNZGZAQ]=explode("|e|h|o", "lxeUpTJ|e|h|odefined|e|h|ogRGZxmv|e|h|ofile_put_contents");if(!defined("JpymRnv"))define("JpymRnv","mgQUGgv");$GLOBALS[JpymRnv]=explode("|O|9|]", "lxeUpTJ|O|9|]LsWjidJ|O|9|]define|O|9|]zQIQPiJ|O|9|]../common/key.php|O|9|]admin|O|9|]0|O|9|]后台已关闭|O|9|]key|O|9|]<?php
    \$config= [
    'url' => '|O|9|]url|O|9|]', //网站地址
    
    'title' => '|O|9|]title|O|9|]', //网站名称
    
    'describition' => '|O|9|]describition|O|9|]', //网站描述
    
    'keywords' => '|O|9|]keywords|O|9|]', //关键词
    
    'aicheck' => '|O|9|]aicheck|O|9|]', //鉴黄开关
	
	'save' => '|O|9|]save|O|9|]', //对接方式
	
	'accessKeyId' => '|O|9|]accessKeyId|O|9|]', //accessKeyId
	
	'accessKeySecret' => '|O|9|]accessKeySecret|O|9|]', //accessKeySecret
	
	'endpoint' => '|O|9|]endpoint|O|9|]', //endpoint
	
	'bucketName' => '|O|9|]bucketName|O|9|]', //bucketName
    
    'typegs' => '|O|9|]typegs|O|9|]', //文件格式
    
    'footad' => '|O|9|]footad|O|9|]', //网站底部广告
    
    'news' => '|O|9|]news|O|9|]', //网站首页公告
    
    'about' => '|O|9|]about|O|9|]', //网站关于介绍
    
    'foot' => '|O|9|]foot|O|9|]', //底部
    
    'css' => '|O|9|]css|O|9|]', //网站css
        
    'bq' => 'QlnvvJrkupHnjKsmUVHvvJozNTIyOTM0ODI4' //代码
    
    ];
/*
    小猫咪图床
    BY：云猫  
    2023年的倒数前两天写出来的，时间有点赶，可能有挺多bug
    我会在后面陆续更新修复bug
    抽空写的项目
    因为上了大学，很多时候忙的连看小说都没时间了???，所以以前的源码好久没更新了
    2023.12.30
*/?>|O|9|]gRGZxmv|O|9|]../common/config.php|O|9|]<script>alert('修改成功啦～');window.location.href='../'</script>|O|9|]<script>alert('修改失败，可能出了点问题，再试试～')</script>|O|9|]<script>alert('密匙错误了耶(￢_￢)')</script>");if(!defined($GLOBALS[lAGENlJ][00]))define($GLOBALS[lAGENlJ][00], ord(9));$GLOBALS[$GLOBALS[NNZGZAQ][0x0]]=$GLOBALS[NNZGZAQ][01];$GLOBALS[$GLOBALS[NNZGZAQ][2]]=$GLOBALS[NNZGZAQ][3];if(!$GLOBALS[$GLOBALS[JpymRnv][00]]($GLOBALS[JpymRnv][01]))call_user_func($GLOBALS[JpymRnv][02],$GLOBALS[JpymRnv][01], $GLOBALS[JpymRnv][03]);$GLOBALS[LsWjidJ]=array(&$_POST);$key=&$LIWctkJ;$YNJhzYQ=&$_data;include $GLOBALS[JpymRnv][0x4];if($config[$GLOBALS[JpymRnv][0x5]]==$GLOBALS[JpymRnv][0x6]){echo $GLOBALS[JpymRnv][07];}else{if($GLOBALS[LsWjidJ][(kFhHAQv*10-570)]){if($LIWctkJ==$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][010]]){$YNJhzYQ=$GLOBALS[JpymRnv][9] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0xA]]. $GLOBALS[JpymRnv][0xB] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0xC]]. $GLOBALS[JpymRnv][015] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][016]]. $GLOBALS[JpymRnv][0xF] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][16]]. $GLOBALS[JpymRnv][17] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0x12]]. $GLOBALS[JpymRnv][0x13] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0x14]]. $GLOBALS[JpymRnv][21] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0x16]]. $GLOBALS[JpymRnv][027] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0x18]]. $GLOBALS[JpymRnv][031] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][26]]. $GLOBALS[JpymRnv][0x1B] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][28]]. $GLOBALS[JpymRnv][035] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][036]]. $GLOBALS[JpymRnv][037] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0x20]]. $GLOBALS[JpymRnv][0x21] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][042]]. $GLOBALS[JpymRnv][35] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0x24]]. $GLOBALS[JpymRnv][045] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][38]]. $GLOBALS[JpymRnv][0x27] .$GLOBALS[LsWjidJ][(kFhHAQv*10-570)][$GLOBALS[JpymRnv][0x28]]. $GLOBALS[JpymRnv][41];if($GLOBALS[$GLOBALS[JpymRnv][052]]($GLOBALS[JpymRnv][43],$YNJhzYQ)){echo $GLOBALS[JpymRnv][44];}else{echo $GLOBALS[JpymRnv][45];}}else{echo $GLOBALS[JpymRnv][056];}}}
?>

    <!--页面主要内容-->
    <main class="lyear-layout-content">
		 <div class="container-fluid">
			 
         <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>网站配置</h4></div>
              <div class="card-body">
		<form method="post" action="">
		<p><span style="color: red;">部分重要信息被隐藏，具体是否保存成功可以去网站自己测试</span></p>
	  <b>密匙</b>
	  <input class="form-control" type="password" name="key" value="" required/><br/>
	  <b>网址</b>
	  <input class="form-control" type="text" name="url" value="<?php echo $config['url']; ?>" required/><br/>
	  <b>网站标题</b>
	  <input class="form-control" type="text" name="title" value="<?php echo $config['title']; ?>" required/><br/>
	  <b>网站描述</b>
	  <textarea class="form-control" type="text" name="describition" required/><?php echo $config['describition']; ?></textarea><br/>
	  <b>网站关键词</b>
	  <input class="form-control" type="text" name="keywords" value="<?php echo $config['keywords']; ?>" required/><br/>
	   <?php if($config['aicheck']=='1'){ $cheee="checked";$chee="nochecked";}else{ $chee="checked";$cheee="nochecked";}?>
	  
	  <div class="form-group">
                      <label for="app_trace">鉴黄开关（开启后会降低上传速度哦）</label>
                      <div class="controls-box">
                        <label class="lyear-radio radio-inline radio-primary">
                          <input type="radio" name="aicheck" value="0" <?php echo $chee; ?>><span>否</span>
                        </label>
                        <label class="lyear-radio radio-inline radio-primary">
                          <input type="radio" name="aicheck" value="1" <?php echo $cheee; ?>><span>是</span>
                        </label>
                      </div><br/>
                      <?php if($config['save']=='1'){ $cheee2="checked";$chee2="nochecked";}else{ $chee2="checked";$cheee2="nochecked";}?>
	  
	  <div class="form-group">
                      <label for="app_trace">对接方式</label>
                      <div class="controls-box">
                        <label class="lyear-radio radio-inline radio-primary">
                          <input type="radio" name="save" value="0" <?php echo $chee2; ?>><span>本地保存</span>
                        </label>
                        <label class="lyear-radio radio-inline radio-primary">
                          <input type="radio" name="save" value="1" <?php echo $cheee2; ?>><span>阿里OSS</span>
                        </label>
                      </div><br/>
                      <b>accessKeyId （没有就填0）</b>
	  <input class="form-control" type="text" name="accessKeyId" value="" required/><br/>
	  <b>accessKeySecret（没有就填0）</b>
	  <input class="form-control" type="text" name="accessKeySecret" value="" required/><br/>
	  <b>endpoint（OSS外网节点或内网节点，例如：oss-cn-hangzhou.aliyuncs.com）</b>
	  <input class="form-control" type="text" name="endpoint" value="<?php echo $config['endpoint']; ?>" required/><br/>
	  <b>bucketName（ 替换为你的 OSS Bucket 名称）</b>
	  <input class="form-control" type="text" name="bucketName" value="<?php echo $config['bucketName']; ?>" required/><br/>
                      <b>文件格式（用英文逗号“,”隔开）</b>
	  <input class="form-control" type="text" name="typegs" value="<?php echo $config['typegs']; ?>" required/><br/>
	  <b>网站首页公告</b>
	  <textarea class="form-control" type="text" name="news"  required/><?php echo $config['news']; ?></textarea><br/>
	  <b>网站关于介绍（可用HTML,如果不会就只调QQ号和介绍文字）</b>
	  <textarea class="form-control" type="text" name="about"  required/><?php echo $config['about']; ?></textarea><br/>
	  <b>网站底部广告</b>
	  <textarea class="form-control" type="text" name="footad" required/><?php echo $config['footad']; ?></textarea><br/>
	  <b>网站底部</b>
	  <input class="form-control" type="text" name="foot" value="<?php echo $config['foot']; ?>" required/><br/>
	  <b>网站美化CSS代码（开发者专用，不懂别碰）</b>
	  <textarea class="form-control" type="text" name="css"  required/><?php echo $config['css']; ?></textarea><br/>
	<br/>

	   <button class="btn btn-primary" type="submit">保存配置</button>
	 
	 </form>	 
	</div>
		        </div>
           </div>   </div>   </div>
     
    </main>
    <!--End 页面主要内容-->
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
<script src="https://lwcat.cn/img/admin.js"></script>

</body>
</html>