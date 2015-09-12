<!DOCTYPE HTML>
<html lang="zh-cmn-Hans">
<head>
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=592,user-scalable=no,minimal-ui">
    <!-- UC强制全屏 --><meta name="full-screen" content="yes">
    <!-- QQ强制全屏 --><meta name="x5-fullscreen" content="true">
    <!-- UC应用模式 --><meta name="browsermode" content="application">
    <!-- QQ应用模式 --><meta name="x5-page-mode" content="app">
    <link rel="stylesheet" href="../css/j1.css" />
    <link rel="stylesheet" href="../css/swiper.css" />
    <title>shuangwhywhy</title>
</head>
<body>
<div class="j_header">
    <div class="m_header back" style="width:17%;"><img src="../images/back.png"></div>
    <div class="m_header" style="width:65%;"><img style="width:180px;" src="../images/logo.png"></div>
    <div class="m_header about" style="width:17%;"></div>
</div>
<div class="content">
    <div style="position:absolute;top:80px;width:100%;height:100%;background:white;"><img style="width:100px;margin:100px 250px;" src="../images/loading.gif"></div>
</div>
<div class="footer">
    <div class="pre">
        <a href="javascript:;"><div>上一页</div></a>
    </div>
    <div class="next">
        <a href="javascript:;"><div>下一页</div></a>
    </div>
</div>
<div class="go_top"><img src="../images/back.png"></div>
</body>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript">
    (function($){
        var current = 1;
        function show_c(pg) {
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
            }
            var Day = (myDate.getDate()).toString();
            if (Day < 10) {
                Day = "0" + Day;
            }
            var time = Year + Month + Day + Hour + Minutes + "00";
            var page = pg;//页数
            var i = 0;
            $.ajax({
                url: "https://route.showapi.com/255-1?page=" + page + "&showapi_appid=8194&showapi_timestamp=" + time + "&title=&type=10&showapi_sign=528c652a5aa44f4dba281f7998b0e803",
                datatype: "jsonp",
                type: "GET",
                success: function (json) {
                    var message = JSON.parse(json);
                    var data = message.showapi_res_body['pagebean']['contentlist'];
                    function show() {
                        if (i < 20) {
                            var u_head = data[i]['profile_image'];
                            var u_name = data[i]['name'];
                            var time = data[i]['create_time'];
                            var picture = data[i]['image0'];
                            var text = data[i]['text'];
                            if(i==0){
                                $('.content').html("");
                            }
                            $('.content').append(
                                "<div class='data'>" +
                                "<div class='title'>" +
                                "<img src=" + u_head + ">" +
                                "<span>" + u_name + "</span>" +
                                "<p style='margin-top:15px;'>" + time + "</p>" +
                                "<div>" + text + "</div>" +
                                "</div>" +
                                "<p class='p'>" +
                                "<img style='width:100%;' src=" + picture + ">" +
                                "</p>" +
                                "</div>"
                            );
                            i++;
                            show();
                        }else{
                            $('.footer').show();
                        }
                    }

                    show();
                }
            });
        }
        show_c(current);
        $('.pre').click(function(){
            if(current>1){
                current = current -1;
                $('.content').html("");
                $('.footer').hide();
                show_c(current);
            }
        });
        $('.next').click(function(){
            if(current<20){
                $('.content').html("");
                $('.footer').hide();
                current++;
                show_c(current);
            }
        });
        $(window).scroll(function(){
            if($(window).scrollTop()>2000){
                $('.go_top').show();
            }
            if($(window).scrollTop()<2000){
                $('.go_top').hide();
            }
        });
        $('.go_top').click(function(){
            $(window).scrollTop(0);
        });
        $('.back').click(function(){
            history.back();
        });
    })(jQuery);
</script>
</html>