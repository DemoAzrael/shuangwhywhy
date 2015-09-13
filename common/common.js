(function($){
    $('.contact_message .title .convenient-icons').click(function(){
        $('.contact_message').animate(
            {
                right:"-287px"
            },
        200,function(){
                $('.contact').show().animate({
                    right:"0"
                },600);
            });
    });
    $('.contact').click(function(){
        $(this).animate(
            {
                right:"-50px"
            },
            300,function(){
                $('.contact_message').show().animate({
                    right:"0"
                },200);
            });
    });
    $('.header_bg ul li').hover(function(){
        $(this).find('.name').css({
            color:"#86AA28"
        });
        $(this).find('b').css({
            background:"transparent url('../images/ico/topbar_sprite2.png') scroll -231px -18px"
        });
        $(this).find('.more').show().find('div').stop().animate({height:"24px"},200);
    },function(){
        $(this).find('.name').css({
            color:"#999"
        });
        $(this).find('b').css({
            background:"transparent url('../images/ico/topbar_sprite2.png') scroll -223px -18px"
        });
        $(this).find('.more').hide().find('div').stop().css({height:"8px"});
    });
    //回到顶部
    $(window).scroll(function(){
        var height = $(document).scrollTop();
        if(height>=750){
            $('.go_top').show().animate({
                "bottom":"50px"
            },400);
        }else {
            $('.go_top').hide().css({
                bottom:"-145px"
            });
        }
    });
    $('.top').click(function(){
        var height = $(window).height()+140;
        $('.go_top').remove();
        $('.go_top1').stop().show().animate({bottom:height+"px"},800,function(){
            $('.go_top1').hide().removeAttr('style').css({
                bottom:"50px"
            });
            $('.top').append(
                '<div class="go_top">'+
                '<a href="javascript:;" title="返回顶部">'+
                '<img src="../images/top.png">'+'</a>'+'</div>');
        });
        $("html, body").animate({scrollTop:0},800);
    });

    //网页音乐
    var play = 0;   //当前状态
    var currentM = 1;     //当前歌名
    var p = $('.header .music a');
    var audio = p.find('audio')[0];
    p.click(function(){
        if(play == 0){
            play = 1;
            p.css({
                "background":"url('../images/ico/pause.png') no-repeat center"
            });
            audio.play();
        }else{
            play = 0;
            p.css({
                background:"url('../images/ico/play.png') no-repeat center"
            });
            audio.pause();
        }
    });
    function current_music(currentM){
        switch(currentM){
            case 1:p.find('audio').attr({src:"http://shuangmusic.sinaapp.com/xianjian.mp3"});
                $('.header .music marquee').html("仙剑问情-萧人凤");
                audio.play();
                break;
            case 2:p.find('audio').attr({src:"http://shuangmusic.sinaapp.com/jianke.mp3"});
                $('.header .music marquee').html("剑客不能说-陈依婷");
                audio.play();
                break;
            case 3:p.find('audio').attr({src:"http://shuangmusic.sinaapp.com/senlin.mp3"});
                $('.header .music marquee').html("森林狂想曲-班得瑞");
                audio.play();
                break;
            case 4:p.find('audio').attr({src:"http://shuangmusic.sinaapp.com/weiyideni.mp3"});
                $('.header .music marquee').html("这世界唯一的你-周迅");
                audio.play();
                break;
        }
    }
    audio.addEventListener('ended', function () {
        if(currentM%4==0){
            currentM = 1;
        }
        currentM ++;
       current_music(currentM);
    });
    $('.m').click(function(){
        currentM = $(this).index()+1;
        current_music(currentM);
        play = 1;
        p.css({
            "background":"url('../images/ico/pause.png') no-repeat center"
        });
    });
})(jQuery);



