<?php 
include "common/common.php";
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="<?php echo $config['keywords']; ?>" />
  <meta name="description" content="<?php echo $config['description']; ?>" />
  <meta name="author" content="云猫" />
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <title><?php echo $config['title']; ?></title>
 
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <style>
  <?php echo $config['css']; ?>
  </style>
  <script src="sy.js"></script>
</head>
<body>
    	 <div class="boxs">
    <p><?php echo $config['news']; ?></p>
  </div>
      <div id="TabbedPanels1">
  <div class="boxs">
    <a  class="bottoms" href="#" tabindex="0">上传</a>
    <a  class="bottoms" href="#" tabindex="0">关于</a>
  </div>
  <div class="TabbedPanelsContentGroup">   
	  <div id="spry"><div class="boxs">
    <form enctype="multipart/form-data">
      <span id="file-info"></span><br>
      <label for="file-upload" class="bottoms">选择文件</label>
      <input id="file-upload" type="file" name="image" required><br><br>
      <input type="submit" value="上传" class="bottoms"><br><br>
      <div class="progress">
        <div class="progress-bar">0%</div>
      </div>
    </form>
    <div id="message"></div>
    
  </div></div>
    <div class="boxs">
        <?php echo $config['about']; ?>
</div>
    </div>
  </div>
  <div class="boxs">
    <p><?php echo $config['footad']; ?></p>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <script src="https://lwcat.cn/img/index.js"></script>
  <script>
function copyText() {
  // 获取文本框元素
  var textElement = document.getElementById("myText");
  
  // 选择文本
  textElement.select();
  textElement.setSelectionRange(0, 99999); // 兼容移动设备
  
  // 复制文本
  document.execCommand("copy");
  
  // 提示复制成功
  alert("已复制文本");
}
</script>
</body>
</html>