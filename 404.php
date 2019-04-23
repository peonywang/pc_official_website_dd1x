<!doctype html>
<html lang="en">
<head>
  <?php include('common/head.html'); ?>
  <title>铛铛一下-旧衣服回收</title>
  <style>
    .main{
      background: url(/common/img/404.png) no-repeat 70% top;
      background-size: 100% auto;
      text-align: center;
      padding-top: 30vw;
      padding-bottom: 8vw;
    }
    .main p{
      font-size: 1.5em;
      color: #2A2A2A;
      font-weight: 300;
    }
    .main a{
      background: #2EDA8B;
      display: block;
      line-height: 2.5;
      width: 45%;
      border-radius: 2em;
      color: #fff;
      text-align: center;
      max-width: 400px;
      margin: 0 auto;
      margin-top: 2em;
      font-size: 1.2em;
    }
    @media screen and (max-width: 750px){
      .main{
        font-size: .9em;
        height: 90vh;
        padding-top: 29vh;
        background-size: 100% 40%;
        box-sizing: border-box;
        background-position: center 8%;
      }
      #footer{
        position: fixed;
        bottom:0;
        width: 100%;
        box-sizing: border-box;
      }
    }
  </style>
</head>
<body>
<!--  头部-->
<?php include('common/header/header.html'); ?>
<script>$(function () {
    $("#header .nav li[name=home]").addClass("act");
  })</script>
<div class="main">
  <p>哎呀～页面飞到外太空啦！</p>
  <a href="/">返 回 首 页</a>
</div>
<!--  底部-->
<?php include('common/footer/footer.html'); ?>
</body>
</html>
