　画圆：这个so easy ,把div设置等高等宽，border设置为相同的长度就可以了。
　   画三角形：这个有点复杂，就算是你画图你也不会清楚到底是怎么回事。就算你在网上搜，百分之九十五只告诉你怎么用，都没有告诉你精华所在。
　   .arrow-up {　　　　　　　　　　　　　　　　　　这个是向上的三角形：当然长宽设为０,这里不好画图，我告诉你精华你画画图想想就知道了。
　　　　width:0; 　　　　　　　　　　　　　　　　其精华就是：border与border之间交叉的地方是矩形，这个矩形是对角斜切平均分给两个border的，一个边框设为隐藏，因为矩形是没有宽高的，
　　　　height:0; 　　　　　　　　　　　　　　　　所以就呈现初一个三角形了。当然你可以选择canvas画图，不过那个没有这个简单。（俏猫手机uface专题的对话框有代码可以看一下）
　　　　border-left:30px solid transparent;
　　　　border-right:30px solid transparent;
　　　　border-bottom:30px solid #fff;　　