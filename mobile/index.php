<!DOCTYPE HTML>
<html lang="zh-cmn-Hans">
<head>
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no"/>
    <!-- UC强制全屏 --><meta name="full-screen" content="yes">
    <!-- QQ强制全屏 --><meta name="x5-fullscreen" content="true">
    <!-- UC应用模式 --><meta name="browsermode" content="application">
    <!-- QQ应用模式 --><meta name="x5-page-mode" content="app">
    <script type="text/javascript" src="js/htmlFontSize.js"></script>
    <title>shuangwhywhy</title>
</head>
<style>
    body{
        max-width:640px;
        min-width:320px;
        background:#000000 url('images/index_bg.jpg') no-repeat;
        background-size:cover;
        margin:0 auto;
    }
    .name{
        width:100px;
        position:absolute;
        bottom:20px;
        right:10px;
    }
</style>
<body>
<img class="name" src="images/name.png">
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
(function(){
    var i=3;
    var time = setInterval(function(){
        console.log(i);
        i=i-1;
        if(i==0){
            clearInterval(time);
            window.location.href = "home.php"
        }
    },1000);
})(jQuery);
</script>
</html>