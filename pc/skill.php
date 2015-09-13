<!DOCTYPE HTML>
<html lang="zh-cmn-Hans">
<head>
    <link href="/favicon.ico" rel="shortcut icon">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shuangwhywhy</title>
    <link type="text/css" href="../css/swiper.min.css" rel="stylesheet">
    <link type="text/css" href="../css/animate.min.css" rel="stylesheet">
    <link type="text/css" href="../common/contact.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <style>
        html, body {
            position: relative;
            height: 100%;
            color:white;
        }
        body {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
            background:#403438;
        }
        /*swiper插件*/
        .menu .swiper-container {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .menu .swiper-slide {
            text-align: center;
            color:white;
            font-size: 25px;
            background:#5C4B51;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            cursor:pointer;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            box-shadow:0 0 0 1px #403438 inset;
        }
        .menu .swiper-slide:hover{
            color:#86AA28;
        }
        .menu .current{
            color:#86AA28;
        }
        .menu{
            background: #403438;
            height:100%;
            width:240px;
            position:fixed;
            top:0;
            box-shadow: 0px 0px 20px #241D20;
        }
        .content{
            width:550px;
            height:100%;
            position:fixed;
            top:0;
            left:280px;
        }
        .content .title{
            color:#86AA28;
            font-weight:500;
            font-size:25px;
            text-align:center;
        }
        .content .text{
            text-indent:32px;
            color:#86AA28;
            font-size:16px;
            line-height:30px;
        }
    </style>
</head>
<body>
<?php include "../common/contact.php" ?>
<!-- Swiper -->
<div class="menu">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div data-index="lunbo" class="swiper-slide current">图片轮播</div>
            <div data-index="pic_center" class="swiper-slide">图片居中</div>
            <div data-index="pubu" class="swiper-slide">瀑布流</div>
            <div data-index="yinying" class="swiper-slide">背景阴影</div>
            <div data-index="gaoliang" class="swiper-slide">悬停高亮</div>
            <div data-index="tuxing" class="swiper-slide">div画图形</div>
            <div data-index="zhejiao" class="swiper-slide">折角撕页</div>
            <div data-index="bianan" class="swiper-slide">变亮变暗</div>
            <div data-index="xuanzhuan" class="swiper-slide">css3旋转</div>
            <div data-index="chajian" class="swiper-slide">自定义插件</div>
            <div data-index="yujiazai" class="swiper-slide">图片预加载</div>
            <div data-index="lanjiazai" class="swiper-slide">图片懒加载</div>
            <div data-index="swiper" class="swiper-slide">swiper插件</div>
            <div data-index="mobi&pc" class="swiper-slide">判断访问方式</div>
            <div data-index="xiangpica" class="swiper-slide">h5橡皮擦</div>
        </div>
    </div>
</div>

<div class="content">
    <h2 class="title">图片轮播</h2>
    <div class="text">

    </div>
</div>

<div class="pictures"></div>
</body>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script src="../common/common.js"></script>
<script type="text/javascript">
    //siwper插件初始化
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        slidesPerView: 5,
        paginationClickable: true,
        spaceBetween: 0,
        mousewheelControl: true,
        loop:true
    });
    //选择菜单显示相应内容
    change_content("../other/skill/lunbo.php");
    $('.swiper-slide').click(function(){
      var title = $(this).html();
      var u =$(this).attr('data-index');
      var url = "../other/skill/"+u+".php";
      $('.content .title').html(title);      //改变标题
      $(this).addClass('current').siblings().removeClass('current');
      change_content(url);
    });
    //ajax调用对应的php内容
    function change_content(url){
        $.ajax({
            type: 'POST',
            url: url ,
            success: function(content){
                $('.content .text').html(
                    '<p class="animated bounceInRight">'+content+'</p>'
                );
            }
      });
    }
</script>
</html>