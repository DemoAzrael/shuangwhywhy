<!DOCTYPE HTML>
<html lang="zh-cmn-Hans">
<head>
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <!-- UC强制全屏 --><meta name="full-screen" content="yes">
    <!-- QQ强制全屏 --><meta name="x5-fullscreen" content="true">
    <!-- UC应用模式 --><meta name="browsermode" content="application">
    <!-- QQ应用模式 --><meta name="x5-page-mode" content="app">
    <script type="text/javascript" src="js/htmlFontSize.js"></script>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/swiper.css" />
    <title>shuangwhywhy</title>
</head>
<body>
<div class="header">
    <div class="m_header back" style="width:17%;"></div>
    <div class="m_header" style="width:65%;"><img style="width:4.8rem;" src="images/logo.png"></div>
    <div class="m_header about" style="width:17%;"><img style="width:1.6rem;" src="images/message.png"></div>
</div>
<div class="content">
</div>
<div class="footer">
    <div class="menu current">
        <div class="m_c">
            <img style="margin-bottom:3px;" src="images/5.png">
            <p style="color:#42CA06;">首页</p>
        </div>
    </div>
    <div class="menu">
        <div class="m_c">
            <img style="margin-bottom:2px;" src="images/2.png">
            <p >搞笑</p>
        </div>
    </div>
    <div class="menu">
        <div class="m_c">
            <img src="images/3.png">
            <p>创意</p>
        </div>
    </div>
    <div class="menu">
        <div class="m_c">
            <img src="images/4.png">
            <p>更多</p>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/swiper.js"></script>
<script type="text/javascript">
    (function($){
       //点击不同按钮加载不同的内容
        show_content("content/1.php");
       function show_content(url){
           $.ajax({
               url:url,
               success:function(data){
                   $('.content').html(data);
               }
           });
       }
        function m_change(index){
            for(var i=1;i<5;i++){
                if(i!==index){
                    $('.footer .menu').eq(i-1).find('img').attr({
                        "src":"images/"+i+".png"
                    });
                    $('.footer .menu').eq(i-1).find('p').css({
                        "color":"#999999"
                    });
                }
            }
        }
        $('.footer .menu').click(function(){
            var index = $(this).index() + 1;
            var index1 = index + 4;
            $(this).find('img').attr({
                "src":"images/"+index1+".png"
            });
            $(this).find('p').css({
                "color":"#42CA06"
            });
            m_change(index);
            show_content("content/"+index+".php");
        });
    })(jQuery);
</script>
</html>