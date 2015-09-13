/**
 * Created by wushuang on 2015/8/2.
 */
(function ($) {
    var stop;//时间停止
    //动态获取浏览器的高度
    $(window).resize(height);

    //图片轮播淡入淡出的效果
    $('.index_focus ul li:gt(0)').hide();
    $('.j_goto').click(function () {
        var data_index = $(this).attr('data-index');
        var current = $('.index_focus ul').find('.current');
        var position = current.index();
        if (!(data_index == position)) {
            $(this).addClass('current').siblings('a').stop().removeClass('current');
            current.removeClass('current');
            $('.index_focus ul li').eq(data_index).stop().fadeIn('slow').siblings('li').fadeOut('slow');
        }
    });

    //点击前一个和下一个按钮时图片的切换
    $('.J_toggle').click(function () {
        if ($(this).hasClass('index_focus_pre')) {
            var current = $('.slide_nav .current').attr('data-index');
            var current = current - 1;
            switch_pic(current);
        } else {
            var current = $('.slide_nav .current').attr('data-index');
            current++;
            if (current == 10) {
                switch_pic(0);
            } else {
                switch_pic(current);
            }
        }
    });

    function switch_pic(current) {
        $('.index_focus ul li').eq(current).stop().fadeIn('slow').siblings('li').fadeOut('slow');
        $('.slide_nav a').eq(current).stop().addClass('current').siblings('a').removeClass('current');
    }

    //每个一段时间切换
    lunbo();
    function lunbo() {
        stop = setInterval(function () {
            var current = $('.slide_nav .current').attr('data-index');
            current++;
            if (current == 10) {
                switch_pic(0);
            } else {
                switch_pic(current);
            }
        }, 6000);
    }

    $('.index_focus').mouseover(function () {
        $('.J_toggle').show();
        clearInterval(stop);
    });
    $('.index_focus').mouseout(function () {
        $('.J_toggle').hide();
        lunbo();
    });
})(jQuery);
