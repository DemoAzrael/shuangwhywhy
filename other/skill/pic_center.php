　对于前段人员来说，居中是一个离不开的话题。让我们来看下当图片超过屏幕大小和小于屏幕大小的时候改怎么让图片居中。首先对于大图：首先用一个div将图片包裹起来，让div 位置设为相对定位
(position:relative),向左或向右浮动５０％，此时图片和div都会浮动５０％,然后设置图片跟刚才相反的方向在浮动５０％，你会发现图片居中了，在草图上尝试画一下你就明白了。对于小图：方法很多种
，这里我只说一个小细节：当我们用margin：auto时让图片居中，你会发现居然不管用，这是因为你的父级没有给一个确定的值，所以会失效一定要注意哟。（在我们柚子舍的很多ｐｃ端的专题可以看到）