<!DOCTYPE HTML>
<html lang="zh-cmn-Hans">
<head>
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=592,user-scalable=no,target-densitydpi=device-dpi,minimal-ui">
    <!-- UC强制全屏 --><meta name="full-screen" content="yes">
    <!-- QQ强制全屏 --><meta name="x5-fullscreen" content="true">
    <!-- UC应用模式 --><meta name="browsermode" content="application">
    <!-- QQ应用模式 --><meta name="x5-page-mode" content="app">
    <title>shuangwhywhy</title>
</head>
<style>
    body{
        background:url('../images/4_1.jpg');
        background-attachment:fixed;
        max-width:640px;
        min-width:320px;
        background-size:cover;
        margin:0 auto;
        font: 12px/1.5 Tahoma,"å¾®è½¯é›…é»‘","Microsoft Yahei","hiragino sans gb",Helvetica,Arial,"å®‹ä½“","sans-serif";
        color: #666;
        padding:0 20px;
    }
    .cont{
        width:100%;
        margin:10px 0;
    }
    .cont .k_head{
        width:72px;
        height:auto!important;
        min-height:40px;
        border-radius:80px;
        float:left;
        clear:both;
    }
    .answer .triangle{
        width:0;
        height:0;
        border-top:10px solid transparent;
        margin:15px 0 0 0;
        border-bottom:10px solid transparent;
        border-right:15px solid  rgba(255 , 255 , 255 , 0.5);
        float:left;
    }
    .cont .kenan{
        width:360px;
        height:auto!important;
        min-height:40px;
        background:rgba(255 , 255 , 255 , 0.5);
        float:left;
        border-radius:10px;
        padding:10px 0 10px 10px;
        font-size:25px;
        margin-bottom:30px;
    }
    .cont .x_head{
        width:72px;
        border-radius:80px;
        float:right;
        clear:both;
    }
    .ask .triangle{
        width:0;
        height:0;
        margin:15px 0 0 0;
        border-top:10px solid transparent;
        border-radius:3px 0 0 3px;
        border-bottom:10px solid transparent;
        border-left:15px solid rgba(255 , 255 , 255 , 0.5);
        float:right;
    }
    .cont .xiaolan{
        width:360px;
        height:auto!important;
        height:auto!important;
        min-height:40px;
        background:rgba(255 , 255 , 255 , 0.5);
        float:right;
        border-radius:10px;
        padding:10px 0 10px 10px;
        font-size:25px;
        margin-bottom:50px;
    }
    .footer{
        position:fixed;
        bottom:0;
        left:0;
        width:100%;
        height:80px;
        background:white;
        border-top:1px solid #CCC;
        font-size:23px;
    }
    input{
        width:70%;
        height:50px;
        border:none;
        border-bottom:1px solid #ccc;
        margin:20px 0 0 50px;
        font-size:23px;
    }
    label{
        padding:10px;
        background:#999;
        margin: 5px 0 0 20px;
    }
</style>
<body>
<div class="content">
    <div class="cont answer">
        <img class="k_head" src="../images/kenan.jpg">
        <div class="triangle"></div>
        <div class="kenan">
            大家好！我是智能机器人，在线回答各种奇葩问题，我上知天文，下晓地理！
        </div>
    </div>
</div>
<div class="footer">
    <input type="text"><label>提交</label>
</div>
<div style="width:100%;height:100px;"></div>
</body>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript">
    (function($){
        function reply(data) {
            var myDate = new Date();
            var Year = (myDate.getYear() + 1900).toString();
            var Month = (myDate.getMonth() + 1).toString();
            if(Month<10){
                Month = "0" + Month;
            }
            var Hour = (myDate.getHours()).toString();
            if(Hour<10){
                Hour = "0" + Hour;
            }
            var Minutes = (myDate.getMinutes()).toString();
            if (Minutes < 10) {
                Minutes = "0" + Minutes;
            var Day = (myDate.getDate()).toString();
            if (Day < 10) {
                    Day = "0" + Day;
                }
            var time = Year + Month + Day + Hour + Minutes + "00";
            $.ajax({
                url: "https://route.showapi.com/60-27?info="+data+"&showapi_appid=8194&showapi_timestamp=" + time + "&userid=userid&showapi_sign=528c652a5aa44f4dba281f7998b0e803",
                datatype: "jsonp",
                type: "GET",
                success: function (json) {
                    var data = JSON.parse(json);
                    var text = data.showapi_res_body.text;
                    $('.content').append(
                    "<div class='cont answer'>"+
                    "<img class='k_head' src='../images/kenan.jpg'>"+
                    "<div class='triangle'></div>"+
                    "<div class='kenan'>"+
                    text+
                    "</div></div>"
                    );
                }
            });
        }
        $('label').click(function(){
            var html = $('input').val();
            $('input').val("");
            $('.content').append(
            "<div class='cont ask'>" +
            "<img class='x_head' src='../images/xiaolan.jpg'>"+
            "<div class='triangle'></div>"+
            "<div class='xiaolan'>"+
            html+
            "</div></div>"
            );
            reply(html);
        });
    })(jQuery);
</script>
</html>
