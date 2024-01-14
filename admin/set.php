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
 创建时间 2024-01-14 15:04:45
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
 BY：云猫
*/

if(!defined("kbuTmCJ"))define("kbuTmCJ","ZsWkFfJ");$GLOBALS[kbuTmCJ]=explode("|4|y|E", "fbTuTLJ");if(!defined("vRcUalv"))define("vRcUalv","lfXFaVJ");$GLOBALS[vRcUalv]=explode("|9|^|5", "ksQPggJ|9|^|5defined|9|^|5XhNpMLv|9|^|5file_put_contents|9|^|5VbLunwv|9|^|5define|9|^|5lERmDev|9|^|5../common/key.php|9|^|5admin|9|^|50|9|^|5后台已关闭|9|^|5key|9|^|5<?php
    \$config= [
    'url' => '|9|^|5url|9|^|5', //网站地址
    
    'title' => '|9|^|5title|9|^|5', //网站名称
    
    'describition' => '|9|^|5describition|9|^|5', //网站描述
    
    'keywords' => '|9|^|5keywords|9|^|5', //关键词
    
    'aicheck' => '|9|^|5aicheck|9|^|5', //鉴黄开关
    
    'typegs' => '|9|^|5typegs|9|^|5', //文件格式
    
    'footad' => '|9|^|5footad|9|^|5', //网站底部广告
    
    'news' => '|9|^|5news|9|^|5', //网站首页公告
    
    'about' => '|9|^|5about|9|^|5', //网站关于介绍
    
    'foot' => '|9|^|5foot|9|^|5', //底部
    
    'css' => '|9|^|5css|9|^|5', //网站css
        
    'bq' => 'QlnvvJrkupHnjKsmUVHvvJozNTIyOTM0ODI4' //代码
    
    ];
/*
    小猫咪图床
    BY：云猫  
    2023年的倒数前两天写出来的，时间有点赶，可能有挺多bug
    我会在后面陆续更新修复bug
    抽空写的项目
    因为上了大学，很多时候忙的连看小说都没时间了˃ʍ˂，所以以前的源码好久没更新了
    2023.12.30
*/?>|9|^|5../common/config.php|9|^|5<script>alert('修改成功啦～');window.location.href='../'</script>|9|^|5<script>alert('修改失败，可能出了点问题，再试试～')</script>|9|^|5<script>alert('密匙错误了耶(￢_￢)')</script>");if(!defined($GLOBALS[kbuTmCJ][0x0]))define($GLOBALS[kbuTmCJ][0x0], ord(1));$GLOBALS[$GLOBALS[vRcUalv][0x0]]=$GLOBALS[vRcUalv][01];$GLOBALS[$GLOBALS[vRcUalv][2]]=$GLOBALS[vRcUalv][03];if(!$GLOBALS[$GLOBALS[vRcUalv][0x0]]($GLOBALS[vRcUalv][0x4]))call_user_func($GLOBALS[vRcUalv][5],$GLOBALS[vRcUalv][0x4], $GLOBALS[vRcUalv][6]);$GLOBALS[VbLunwv]=array(&$_POST);$key=&$QwuMXPJ;$HEAhVRQ=&$_data;include $GLOBALS[vRcUalv][07];if($config[$GLOBALS[vRcUalv][8]]==$GLOBALS[vRcUalv][0x9]){echo $GLOBALS[vRcUalv][012];}else{if($GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)]){if($QwuMXPJ==$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][0xB]]){$HEAhVRQ=$GLOBALS[vRcUalv][0xC] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][13]]. $GLOBALS[vRcUalv][0xE] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][017]]. $GLOBALS[vRcUalv][020] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][17]]. $GLOBALS[vRcUalv][18] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][023]]. $GLOBALS[vRcUalv][024] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][21]]. $GLOBALS[vRcUalv][22] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][0x17]]. $GLOBALS[vRcUalv][0x18] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][031]]. $GLOBALS[vRcUalv][032] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][27]]. $GLOBALS[vRcUalv][0x1C] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][0x1D]]. $GLOBALS[vRcUalv][0x1E] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][0x1F]]. $GLOBALS[vRcUalv][040] .$GLOBALS[VbLunwv][(0-2254+fbTuTLJ*46)][$GLOBALS[vRcUalv][33]]. $GLOBALS[vRcUalv][0x22];if($GLOBALS[$GLOBALS[vRcUalv][2]]($GLOBALS[vRcUalv][0x23],$HEAhVRQ)){echo $GLOBALS[vRcUalv][36];}else{echo $GLOBALS[vRcUalv][37];}}else{echo $GLOBALS[vRcUalv][046];}}}
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