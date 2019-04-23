<?php
/**
 * Created by PhpStorm.
 * User: wangguohua
 * Date: 2019/3/21
 * Time: 下午6:34
 */
?>
<!doctype html>
<html lang="en">
<head>
  <?php include('../common/head.html'); ?>
  <title>资讯动态-铛铛一下</title>
  <link rel="stylesheet" href="./news.css">
</head>
<body>
<!--  头部-->
<?php include('../common/header/header.html'); ?>
<script>$(function () {
    $("#header .nav li[name=news]").addClass("act");
  })</script>

<div class="banner">
  <a href="alipays://platformapi/startapp?appId=2018120362447108&page=pages%2Findex%2Findex?channel=251"
     title="旧衣服回收,支付宝小程序下单"><span>旧衣服回收,支付宝小程序下单</span>
  </a>
</div>
<div class="main">
  <div class="w">
    <h1>
      资讯动态
      <span>The News About Us</span>
    </h1>
    <?php
    $method = 'GET';
    $url = 'https://vues.dd1x.cn/api/getInfoByPage/1';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    $content = curl_exec($curl);
    $news = json_decode($content, true);
    ?>

    <ul class="list">
      <?php foreach($news['data']['content'] as $k => $v){ ?>
        <li>
          <a href="/news/newsDetail.php?id=<?php echo  $v['id']; ?>&key=<?php echo  $k; ?>">
            <div class="imgD">
              <img src="<?php echo  $v['coverPhoto']; ?>" alt="<?php echo  $v['title']; ?>" align=center>
            </div>
            <div class="cont">
              <h2><?php echo  $v['title']; ?></h2>
              <span class="time">
                <script>
                  var dd = new Date(parseInt(<?php echo  $v['logTime']; ?>)).toLocaleString();
                  document.write(dd);
                </script>
              </span>
              <p><?php echo  $v['remark']; ?></p>
              <span class="more green">了解更多 →</span>
            </div>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>

<!--  底部-->
<?php include('../common/footer/footer.html'); ?>
</body>
</html>