<?php
/**
 * Created by PhpStorm.
 * User: wangguohua
 * Date: 2019/3/22
 * Time: 上午11:02
 */
?>

<!doctype html>
<html lang="en">
<head>

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
  $news = curl_exec($curl);
  $news = json_decode($news, true);
  $content = $news['data']['content'];
  $k = (int)$_GET['key'];
  $detail = $content[$k];
  ?>

  <?php include('../common/head.html'); ?>
  <title><?php echo $detail['title'];?>-铛铛一下</title>
  <link rel="stylesheet" href="./news.css">
</head>
<body>
<!--  头部-->
<?php include('../common/header/header.html'); ?>
<script>$(function () {
    $("#header .nav li[name=news]").addClass("act");
  })</script>

<!--  面包屑-->
<div class="breadcrumb">
  <ul class="w">
    <li><a href="/">首页</a></li>
    <li><a href="/news">资讯动态</a></li>
    <li class="act"><?php echo $detail['title'];?></li>
  </ul>
</div>
<div class="detailD">
  <div class="w">
    <h1><?php echo $detail['title'];?></h1>
    <span class="time">
      <script>
        var dd = new Date(parseInt(<?php echo  $detail['logTime']; ?>)).toLocaleString();
        document.write(dd);
      </script>
    </span>
    <div class="text">
      <?php echo $detail['content'];?>
    </div>
    <div class="link">
      <?php if($k>0){
        echo '<a href="?id='.$content[$k-1]['id'].'&key='.($k-1).'" class="left">上一篇：'.$content[$k-1]['title'].'</a>';
       }
       if($k<count($content)-1){
         echo '<a href="?id='.$content[$k+1]['id'].'&key='.($k+1).'" class="right">下一篇：'.$content[$k+1]['title'].'</a>';
       }
      ?>
    </div>
  </div>
</div>
<!--  底部-->
<?php include('../common/footer/footer.html'); ?>
</body>
</html>
