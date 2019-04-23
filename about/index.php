<?php
/**
 * Created by PhpStorm.
 * User: wangguohua
 * Date: 2019/3/20
 * Time: 下午3:47
 */ ?>
<!doctype html>
<html lang="en">
<head>
  <?php include('../common/head.html'); ?>
  <title>关于我们-铛铛一下</title>
  <link rel="stylesheet" href="about.css">
</head>
<body>
<!--  头部-->
<?php include('../common/header/header.html'); ?>
<script>$(function () {
    $("#header .nav li[name=about]").addClass("act");
  })</script>

<h1 class="banner">
  <a href="alipays://platformapi/startapp?appId=2018120362447108&page=pages%2Findex%2Findex?channel=251"
     title="旧衣服回收,支付宝小程序下单"><span>旧衣服回收,支付宝小程序下单</span>
  </a>
</h1>
<div class="main w">
  <h2 id="company">
    公司范围
  </h2>
  <p class="companydis">
    一家实现用户低碳生活理念的互联网科技公司，解决用户在垃圾分类、旧物处理等低碳行为上的难题。引导用户进行低碳行为，倡导用户享受低碳环保的生活理念，同时协助用户以低碳方式处理废旧物品，通过免费上门回收、实物兑换、公益助力及闲置交易等功能为用户创造健康的生活方式。
  </p>
  <h2 id="business">
    业务范围
  </h2>
  <ul class="businessD">
    <li>
      <div class="num">01</div>
      <div class="cont">
        <h3>旧衣、旧书、废手机<br>免费上门回收</h3>
        <p>提供快递免费上门回收服务<br>
          已开通了22个省市的244个城市</p>
      </div>
    </li>
    <li>
      <div class="num">02</div>
      <div class="cont">
        <h3>助力公益，让旧物更精准，<br>让流向更明确公益金捐赠</h3>
        <p>每回收1kg旧衣物/旧书籍或者1部公益环保机，铛铛一下捐助0.1元公益金</p>
        <p>旧物捐助：将回收上来的闲置旧物在工厂统一进行分拣，根据不同贫困山区的要求，挑选出适合的种类、尺寸、数量进行长期捐助，每一次捐助都给予反馈</p>
      </div>
    </li>
    <li>
      <div class="num">03</div>
      <div class="cont">
        <h3>低碳商城，让低碳成为生活方式<br>回收获得碳币奖励</h3>
        <p>可免费兑换平台上的百余种电子优惠券（涵盖衣食住行方方面面），除了优惠券外，还有各种精美低碳物品可直接包邮兑换</p>
      </div>
    </li>
  </ul>
  <h2 id="contact">
    联系我们
  </h2>
  <div class="contact">
    <div class="k">
      <div class="d1">
        <a class="mail" href="mailto:leiyuxun@ddyx.onaliyun.com"><b>邮箱：</b>leiyuxun@ddyx.onaliyun.com</a>
        <a class="wechat"><b>微信：</b>dangdangyixia</a>
        <a class="tel" href="tel:010-52511652"><b>电话：</b>010-52511652</a>
      </div>
      <div class="dress">
        <p>公司地址：北京市大兴区经济技术开发区景园北街2号7栋02号楼</p>
        <p>邮政编码：100176</p>
      </div>
    </div>
  </div>
</div>
<!--  底部-->
<?php include('../common/footer/footer.html'); ?>
<!--  侧边栏-->
<div class="rightNav">
    <a class="act" href="#company">公司简介</a>
    <a href="#business">业务范围</a>
    <a href="#contact">联系我们</a>
</div>
</body>
</html>
