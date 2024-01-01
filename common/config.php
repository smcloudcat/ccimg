<?php
    $config= [
    'url' => 'https://img.lwcat.cn/', //网站地址
    
    'title' => '小猫咪免费网盘', //网站名称
    
    'describition' => '小猫咪免费网盘', //网站描述
    
    'keywords' => '小猫咪免费网盘', //关键词
    
    'aicheck' => '1', //鉴黄开关
    
    'footad' => '©2016-2024 小猫咪网络<br><a href="https://beian.miit.gov.cn/" target="_blank">粤ICP备2023154257号</a>', //网站底部广告
    
    'news' => '<h2>小猫咪图床</h2>请勿上传违法大陆法律的内容<br>因为本站已开启图片自动鉴黄，所以上传显示100%后请等待一会儿<br>鉴黄检测结束后即会显示图片链接', //网站首页公告
    
    'about' => '<img src="https://q.qlogo.cn/g?b=qq&nk=3522934828&s=100" alt="头像"><p>作者：云猫</p><p>QQ：3522934828</p><p>一只待在大学里混的小懒猫</p><p>他好像什么都会一点点，又好像什么都不会的鸭子</p>
<style>
img {
    width: 100px;
    height: 100px;
	padding: 5px;
	border:red 1px solid;
    border-radius: 20px;
	margin: 1px;
}</style>', //网站关于介绍
    
    'foot' => '©2016-2024 小猫咪网络', //底部
    
    'css' => ' body {
  background-image: url("122.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
    .boxs {
      width: 80%;
      margin: 0 auto;
      margin-bottom:8px;
      padding: 15px;
      background-color: rgba(255, 255, 255, 0.5);
      border: 1px solid #FFF;
      border-radius: 10px;
      text-align: center;
    }
    input[type=file] {
      display: none;
    }

    .bottoms {
      display: inline-block;
      padding: 10px 20px;
      background-color: rgba(255, 255, 255, 0.6);
      color: #333;
      border: 1px solid #b2d4e5;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
    }

    .custom-file-upload:hover {
      border-color: #2196f3;
      background-color: #fff;
    }

    .progress {
      width: 100%;
      height: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      margin-top: 10px;
      overflow: hidden;
    }

    .progress-bar {
      width: 0%;
      height: 100%;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      line-height: 30px;
      transition: width 0.3s ease-in-out;
    }

    .copy-btn {
      display: inline-block;
      padding: 5px 10px;
      background-color: #4CAF50;
      color: white;
      border-radius: 8px;
      font-size: 14px;
      cursor: pointer;
    }
input{
      padding: 5px;
      margin:5px;
      background-color: rgba(255, 255, 255, 0.6);
      color: #333;
      border: 1px solid #b2d4e5;
      border-radius: 5px;
}
    a{
         text-decoration: none;
    }
    }', //网站css
        
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
*/?>