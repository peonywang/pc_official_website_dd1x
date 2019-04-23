<?php
/**
 * author by WangGuohua
 * time 2019.03
 * 本机测试地址http://192.168.1.23:100/
 */
?>
<!doctype html>
<html lang="en">
<head>
  <?php include('common/head.html'); ?>
  <title>铛铛一下-旧衣服回收</title>
  <link rel="stylesheet" href="/common/index.css">
</head>
<body>
<!--  头部-->
<?php include('common/header/header.html'); ?>
<script>$(function () {
    $("#header .nav li[name=home]").addClass("act");
  })</script>
<h1 style="position: absolute;z-index: -1;">铛铛一下-首页-旧物回收</h1>
<!--  banner-->
<div class="banner">
  <a href="alipays://platformapi/startapp?appId=2018120362447108&page=pages%2Findex%2Findex?channel=251"
     title="旧衣服回收,支付宝小程序下单"><span>旧衣服回收,支付宝小程序下单</span>
  </a>
</div>
<!--  下单-->
<?php
$kind = [
    [
        'title' => '衣物回收',
        'src' => '/common/img/clothespc.png',
        'date' => [
            [
                'tit' => '衣服',
                'src' => '/common/img/clothes1.png'
            ],
            [
                'tit' => '鞋子袜子',
                'src' => '/common/img/clothes2.png'
            ],
            [
                'tit' => '帽子围脖',
                'src' => '/common/img/clothes3.png'
            ],
            [
                'tit' => '保暖用品',
                'src' => '/common/img/clothes4.png'
            ],
            [
                'tit' => '枕头',
                'src' => '/common/img/clothes5.png'
            ],
            [
                'tit' => '床单被罩',
                'src' => '/common/img/clothes6.png'
            ],
            [
                'tit' => '包包',
                'src' => '/common/img/clothes8.png'
            ],
        ]
    ],
    [
        'title' => '书籍回收',
        'src' => '/common/img/bookpc.png',
        'date' => [
            [
                'tit' => '绘本漫画',
                'src' => '/common/img/book1.png'
            ],
            [
                'tit' => '益智读物',
                'src' => '/common/img/book2.png'
            ],
            [
                'tit' => '经典名著',
                'src' => '/common/img/book3.png'
            ],
            [
                'tit' => '童话寓言',
                'src' => '/common/img/book4.png'
            ],
            [
                'tit' => '职业成长类',
                'src' => '/common/img/book5.png'
            ],
            [
                'tit' => '文学小说类',
                'src' => '/common/img/book6.png'
            ],
            [
                'tit' => '社科类',
                'src' => '/common/img/book7.png'
            ],
            [
                'tit' => '自然科学类',
                'src' => '/common/img/book8.png'
            ],
        ]
    ],
    [
        'title' => '手机回收',
        'src' => '/common/img/phonepc.png',
        'date' => [
            [
                'tit' => '淘汰手机',
                'src' => '/common/img/phone1.png'
            ],
            [
                'tit' => '老年手机',
                'src' => '/common/img/phone2.png'
            ],
            [
                'tit' => '非智能机',
                'src' => '/common/img/phone3.png'
            ],
            [
                'tit' => '损坏手机',
                'src' => '/common/img/phone4.png'
            ]
        ]
    ],

];
?>
<div class="order w">
  <h2>回收服务 <span>Recycling service</span></h2>
  <ul class="tag">
    <?php foreach ($kind as $k => $v) { ?>
      <li class="<?php if ($k == 0) {
        echo act;
      } ?>">
        <?php echo $v['title']; ?>
        <img src="<?php echo $v['src']; ?>" alt="<?php echo $v['title']; ?>">
      </li>
    <?php } ?>
  </ul>
  <!--    类目-->
  <div class="sub sub1">
    <h3>回收类目:</h3>
    <p class="green">0运费，还能免费以“旧”换包邮好礼！</p>
    <div class="cont">
      <?php foreach ($kind as $k => $v) { ?>
        <ul class="<?php if($k == 0) { echo 'act'; } ?>">
          <?php foreach ($v['date'] as $k1 => $v1) { ?>
            <li>
              <img src="<?php echo $v1['src']; ?>" alt="<?php echo $v1['tit']; ?>">
              <p><?php echo $v1['tit']; ?></p>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
    </div>
  </div>
  <!--    流程-->
  <div class="sub sub2">
    <h3>回收流程:</h3>
    <ul>
      <li class="li1">
        <p>网上预约</p>
      </li>
      <li class="li2">
        <p>免费上门收件</p>
      </li>
      <li class="li3">
        <p>回收成功</p>
      </li>
      <li class="li4">
        <p>兑换实物好礼</p>
      </li>
    </ul>
  </div>
  <!--    表单-->
  <?php
  $options1 = ['8kg-15kg', '15kg-25kg', '25kg-35kg', '35kg以上'];
  $options2 = ['5kg-15kg', '15kg-25kg', '25kg-35kg', '35kg以上'];
  $options3 = ['1部', '2部', '3部', '4部', '5部', '6部', '7部'];
  ?>
  <form action="" style="display:none;">
    <ul>
      <li>
        <label for="">
          姓名：
        </label>
        <input type="text" name="name" placeholder="请输入您的姓名">
      </li>
      <li>
        <label for="">
          手机号：
        </label>
        <input type="number" name="phone" placeholder="请输入您的手机号">
      </li>
      <li>
        <label for="">
          预估衣物重量：
        </label>
        <select name="region" id="">
          <option value="" selected disabled>少于8kg无法上门回收</option>
          <?php foreach ($options1 as $k => $v) { ?>
            <option value="<?php echo $v; ?>"><?php echo $v; ?></option>
          <?php } ?>
        </select>
      </li>
      <li>
        <label for="">
          预估书籍重量：
        </label>
        <select name="region" id="">
          <option value="" selected disabled>少于5kg无法上门回收</option>
          <?php foreach ($options2 as $k => $v) { ?>
            <option value="<?php echo $v; ?>"><?php echo $v; ?></option>
          <?php } ?>
        </select>
      </li>
      <li>
        <label for="">
          环保手机数量：
        </label>
        <select name="region" id="">
          <option value="" selected disabled>少于2部无法上门回收</option>
          <?php foreach ($options3 as $k => $v) { ?>
            <option value="<?php echo $v; ?>"><?php echo $v; ?></option>
          <?php } ?>
        </select>
      </li>
      <li>
        <label for="">
          预约上门时间：
        </label>
      </li>
      <li>
        <label for="">
          所在地区：
        </label>

      </li>
      <li>
        <label for="">
          取件地址：
        </label>
        <textarea name="" id="" cols="30" rows="10" placeholder="您的详细地址"></textarea>
      </li>
    </ul>
    <div class="btnD">
      <button type="submit">提交订单</button>
    </div>
  </form >
</div>
<!-- 1层 旧物去向-->
<div class="floor floor1">
  <h2>旧物去向 <span>Where did things go?</span></h2>
  <?php
  $where = [
      [
          'tit' => '环保再生',
          'src' => '/common/img/huan.png',
          'text' => '环保再生：回收的衣物首先经过工人的分拣，部分材质特殊的被清洗、消毒，然后打碎、再加工，最后，衣物开始以新的生命姿态呈现。'
      ],
      [
          'tit' => '公益再造',
          'src' => '/common/img/pointed.png',
          'text' => '工艺再造：用旧布料做新衣或是工艺品，经过旧衣拆洗、改造、再设计而成为设计师的时尚作品。在一些设计师的参与下，再造衣成为一种新型的时尚潮流。'
      ],
      [
          'tit' => '出口转售',
          'src' => '/common/img/outkou.png',
          'text' => '出口转售：一部分旧衣消毒后，低价出售而非送给低收入的非洲人群，实现旧衣的可持续流转，所得收益用于维持公益捐赠和整个回收体系。'
      ],
      [
          'tit' => '公益助力',
          'src' => '/common/img/hezhao.png',
          'text' => '公益助力：我们会将符捐赠标准的衣服定期捐赠给需要帮助的人，发挥旧衣的最大价值，同时也避免捐赠过度的问题。'
      ],

  ];
  ?>
  <ul>
      <?php foreach ($where as $k => $v) { ?>
        <li>
          <h3><?php echo $v['tit']; ?></h3>
          <div class="imgD">
            <img src="<?php echo $v['src']; ?>" alt="<?php echo $v['tit']; ?>">
            <div class="text">
              <?php echo $v['text']; ?>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>
</div>
<!-- 2层 碳币商城-->
<div class="floor floor2">
  <h2>
    碳币商城
    <span>Tanbe Mall</span>
    <div class="dis">让低碳成为生活方式，更多0元好礼，等你发现等你兑换…</div>
  </h2>
  <div class="shop">
    <p>回收获得碳币奖励，关注公众号领取碳币后，<span>即可在公众号平台商城0元兑换海量礼品，<br>涵盖衣食住行方方面面，</span><span>所有精美礼品可直接免费包邮兑换！</span></p>
  </div>
</div>
<!-- 3层 助力公益-->
<div class="floor floor3">
  <h2>助力公益<span>Cause Of The Public Good</span></h2>
  <p>
    在铛铛一下参与旧物回收，可以通过公益金和参加定期举行的爱心活动参与公益。对于旧物回收进行环保处理、循环利用和出口的旧衣物收益，铛铛一下会将每个回收订单收益中的一部分放入到公益池中，用于支持公益组织和公益项目。对于适用于捐助的物资，铛铛一下将收集后捐助贫困地区，所有公益活动的反馈，可以在公益反馈模块查看。</p>
  <div class="media">
    <div class="imgD">
      <img src="common/img/help.png" alt="公益捐赠1">
      <img src="common/img/hua.png" alt="公益捐赠2">
      <img class="last" src="common/img/hezhao.png" alt="公益捐赠3">
      <img class="last" src="common/img/zhuhelp.png" alt="公益捐赠3">
    </div>
      <iframe class="videoD" frameborder="0" src="https://v.qq.com/txp/iframe/player.html?vid=x0807kr7y6u" allowFullScreen="true"></iframe>
  </div>
</div>
<!-- 4层 资讯动态-->
<div class="floor floor4">
  <h2>资讯动态<span>The News About Us</span></h2>

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
    <?php foreach($news['data']['content'] as $k => $v){ if($k<4){ ?>
      <li>
        <a href="/news/newsDetail.php?id=<?php echo  $v['id']; ?>&key=<?php echo  $k; ?>">
          <div class="imgD">
            <img src="<?php echo  $v['coverPhoto']; ?>" alt="<?php echo  $v['title']; ?>" align=center>
          </div>
          <div class="cont">
            <h3><?php echo  $v['title']; ?></h3>
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
    <?php }} ?>
  </ul>
  <div class="btnD">
    <a href="news" class="more">查看更多</a>
  </div>
</div>
<!-- 5层 业务范围-->
<div class="floor floor5">
  <h2>业务范围<span>Business Scope</span></h2>
  <h3>目前铛铛一下已经扩展到28个省、直辖市、自治区</h3>
  <p>除内蒙古、青海、新疆、西藏、宁夏、海南外，其他省市的主要城市地区，铛铛一下旧物回收已实现了覆盖。在未来，铛铛一下将面向全国省市进行再生资源回收产业链深度调研，挖掘更多合作可能，为全面发展低碳生活产业链开疆扩土。</p>
</div>
<!-- 6层 关于我们-->
<div class="floor floor6">
  <h2>关于我们<span>About Us</span></h2>
  <div class="cont">
    <div class="d1">
      <img src="common/img/he.png" alt="铛铛一下团队">
    </div>
    <div class="d2">
      <p>
        铛引导用户进行低碳行为，倡导用户享受低碳环保的生活理念，同时协助用户以低碳方式处理废旧物品。
      </p>
      <p>
        引导用户进行低碳行为，倡导用户享受低碳环保的生活理念，同时协助用户以低碳方式处理废旧物品。
      </p>
      <p>
        铛铛一下，通过免费上门回收、实物礼品兑换、公益助力及闲置物品交易等功能为用户创造低碳环保的生活方式。
      </p>
      <p>
        <a class="green" href="/about">查看更多</a>
      </p>
    </div>
  </div>
</div>
<!--  底部-->
<?php include('common/footer/footer.html'); ?>
<script>
  $(function () {
//    回收服务tag
    $(".order .tag li").click(function () {
      if($(this).not(".act")){
        var index = $(this).index();
        $(this).addClass("act").siblings(".act").removeClass("act");
        $(".order .sub1 .cont ul").eq(index).addClass("act").siblings(".act").removeClass("act");
      }
    })
//    旧物去向说明
    $('.floor1 ul li').click(function () {
      $(this).toggleClass('act').siblings('.act').removeClass('act');
    })
  });
</script>
</body>
</html>