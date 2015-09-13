图片的预加载：在网上搜索到的这种类型，是先将得到ｕｒｌ的图片，以便先获取其高度和宽度，稍后再加载，提高网站的效率　　　
　　<script type="text/javascript">　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
    <!--//--><![CDATA[//><!--
    var images = new Array()
    function preload() {
        for (i = 0; i < preload.arguments.length; i++) {
            images[i] = new Image()
            images[i].src = preload.arguments[i]
        }
    }
    preload(
        ";,
    ";,
    ";
    )
</script>
我想到的方法是运用到轮播效果的当你的网站：
var  imageURL = ["","","",""];
var i = 0;
function preload(){
var img = new Image();
img.src = imageURL[i] ;
if(i==imageURL.length){
}else{
img.onload =function(){
/////////动态插入图片
i++;
preload();
}
}
}