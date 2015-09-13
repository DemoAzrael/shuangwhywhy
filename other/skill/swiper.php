下面是我写的一个循环选取时间的swiper滚动，下面是配置这个swiper，
var swiper1 = new Swiper('.swiper_1', {
direction: 'vertical',    //swiper方向，向上或向下
loop: true,　　　　　//是否循环
slidesPerView: 6,       //简单来说滑动页数（也可以看成界面占有几个swiper）
spaceBetween: 30,   // 间距
centeredSlides: true,　//当前页数处在容器最中间
onSlideChangeEnd: function (swiper1) {　　　//这个是滑动函数,表示滑动完成后的动作
var current = $('.swiper_1>.swiper-wrapper>div');
$(current).eq(swiper1.activeIndex).addClass("swiper_current").siblings().
removeClass("swiper_current");
month = $(current).eq(swiper1.activeIndex).html();
}
});
这是swiper官网API可以查看:http://www.swiper.com.cn/api/pagination/2014/1217/68.html
如果把swiper与css３的transform结合起来m.qiaocat.com/ticket.html这个专题会不会有思路呢。
什么时候用swiper：手机slide可以用因为手机的touchClient,用js写还是很麻烦的，多则最起码要三个函数（开始点击，滑动，离开屏幕，三个函数都要写），pc端用来做图片的轮播就是大材小用了