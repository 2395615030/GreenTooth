<?php
include('./admin/api/WebsiteSettings.php');
if ($scok==1) {
    session_start();
    $_SESSION['count'] = 1;
    header("Location: 404.php");
    exit();
}

$handler = opendir('./assets/background/');//当前目录中的文件夹下的文件夹     需要获取的目录文件夹名字
while( ($filename = readdir($handler)) !== false ) {
      if($filename != "." && $filename != ".."){
          //echo $filename."<br>";
          $tmp[] =  $filename;
      }
}
closedir($handler);
//print_r($tmp);

$arr=array_rand($tmp);
//echo $arr;
//$background='./assets/background/'.$tmp[$arr];//本地图片
$background='';//api接口图片
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <!--为搜索引擎定义关键词-->
    <meta name="keywords" content="桎邪">
    <!--为网页定义描述内容 用于告诉搜索引擎，你网站的主要内容-->
    <meta name="description" content="桎邪 | 上宫 困"> 
    <!--定义网页作者-->
    <meta name="author" content="桎邪"> 
    <!--网站版权-->
    <meta name="copyright" content="桎邪">
    <!--指定IE和Chrome使用最新版本渲染当前页面-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!--指导浏览器如何缓存某个响应以及缓存多长时间-->
    <!--no-cache:先发送请求,与服务器确认该资源是否被更改,如果未被更改,则使用缓存
    no-store:不允许缓存,每次都要去服务器上,下载完整的响应(安全措施)
    public:缓存所有响应,但并非必须,因为max-age也可以做到相同效果
    private:只为单个用户缓存,因此不允许任何中继进行缓存,(比如说CDN就不允许缓存private的响应)
    maxage:当前请求开始,该响应在多久内能被缓存和重用,而不去服务器重新请求,例:max-age=60表示响应可以再缓存和重用60秒
    -->
    <meta http-equiv="cache-control" content="no-cache">
    <!--禁止百度自动转码 用于禁止当前页面在移动端浏览时,被百度自动转码,虽然百度的本意是好的,但是转码效果很多时候却不尽人意-->
    <!--meta http-equiv="Cache-Control" content="no-siteapp" /-->
    <!-- 分享网页时显示的标题-QQ-->
    <meta itemprop="name" content="桎邪 | 上宫 困" />
    <!-- 分享网页时显示的缩略图-QQ-->
    <meta itemprop="image" content="http://qh.qlogo.cn/g?b=sdk&ek=AQQjfONtN9oof2a2fvYXkpuGVptrXxkEqeaKqvmliaw9n7tmOmRpsiaicicU8yic86U0iaSeKQMDvC&s=100&t=1685231746" />
    <!--分享网页时时显示的内容-QQ-->
    <meta name="description" itemprop="description" content="桎邪 | 上宫 困" />
    <!--设置自动适应电脑和手机屏幕--> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no minimal-ui">
    <!--设置浏览器栏favicon图标-->
    <link rel="icon" href="http://qh.qlogo.cn/g?b=sdk&ek=AQQjfONtN9oof2a2fvYXkpuGVptrXxkEqeaKqvmliaw9n7tmOmRpsiaicicU8yic86U0iaSeKQMDvC&s=100&t=1685231746" type="image/x-icon"/>
    <!--定义搜索引擎爬虫的索引方式-->
    <!--index,follow:可以抓取本页，而且可以顺着本页继续索引别的链接
    noindex,follow:不许抓取本页，但是可以顺着本页抓取索引别的链接
    index,nofollow:可以抓取本页，但是不许顺着本页抓取索引别的链接
    noindex,nofollow:不许抓取本页，也不许顺着本页抓取索引别的链接
    -->
    <meta name="robots" content="index,follow">
    <!--引入css文件-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1092713_ebcu16dsqz.css">
    <!--引入js文件-->
    <!--script type="text/javascript" src="main.js"></script-->
</head>


<body>
    <!--网页主体框架-->
    <div class="centent">


        <!--头部-->
        <div class="head">

            <!--头部左边-->
            <div class="head-left">

                <!--侧滑栏图标 电脑默认隐藏-->
                <div class="cehua" onclick="display('lb')">
                    <i class="iconfont icon-gengduo3"></i>
                </div>
                

                
                <!-- 头像图片 -->
                <div class="tx">
                    <a href="/">
                        <img src="<?php echo 'http://qh.qlogo.cn/g?b=sdk&ek=AQQjfONtN9oof2a2fvYXkpuGVptrXxkEqeaKqvmliaw9n7tmOmRpsiaicicU8yic86U0iaSeKQMDvC&s=100&t=1685231746' ;?>" alt="">
                    </a>
                </div>
                
                <!-- 昵称 -->
                <div class="nc">
                    <p><b><?php echo $nc;?></b></p>
                </div>

            </div>
            <!-- 头部左边 end↑ -->


            <!--头部右边-->
            <div class="head-right">



                <!-- 内容 -->
                <div class="nr">
                    <a href="./">
                        <p><span style="color: #03a9f4;">首页</span></p>
                    </a>
                </div>



                <!-- 内容 -->
                <?php
                for ($i = 0; $i < $celanlie; $i++) {
                      $bt = $arr4[$i]['lan'];
                     $lian = $arr4[$i]['lanlink'];
                     echo '
                <div class="nr">
                    <a href="'.$lian.'">
                        <p>'.$bt.'</p>
                    </a>
                </div>';
                }
                ?>

                <!-- 内容 -->
                <!-- <div class="nr">
                    <a href=".\index.php">
                        <p>主页</p>
                    </a>
                </div> -->

                <!-- 内容 -->
                <!-- <div class="nr">
                    <a href="/">
                        <p>实验室</p>
                    </a>
                </div> -->





            </div>
            <!-- 头部右边 end↑ -->

        </div>
        <!-- 头部 end↑ -->




        <!-- 中间内容 -->
        <div class="main">


            <!-- 默认隐藏内容菜单 手机 -->
<!-- <div id="lb" style="display: none;" class="gd-lb">
    <a href="./">
        <p><span style="color: #03a9f4;">首页</span></p>
    </a>
    
    <a href="">
        <p>博客</p>
    </a> -->

    <!-- <a href="/">
        <p>实验室</p>
    </a> -->
<!-- </div> -->

            <!-- 中间内容左边 -->
            <div class="main-left">
                <!-- 内容框 -->
                <div class="main-left-n">
                    <!-- 大标题 -->
                    <div class="main-left-n-s">
                        <h1>
                            <?php echo $sdbt;?>
                        </h1>
                    </div>

                    <!-- 小标题1 -->
                    <div class="main-left-n-x">
                        <p>
                            <!--欢迎访问我的
                            <span style="color:#03a9f4">个人主页</span>
                            在这里<span style="color:#03a9f4">你</span>
                            可以查看我的
                            <span style="color:#03a9f4">最新动态</span>
                            以及访问我的<span style="color:#03a9f4">其他网站</span-->
                            <?php echo $Introduction;?>
                        </p>
                    </div>

                    <!-- 小标题2 -->
                    <div class="main-left-n-xx">
                        <p><?php echo $Introductionn;?></p>
                        <p style="margin-top: 5px;"><?php echo $Introductionnn;?></p>
                        
                    </div>



                    <!-- 图标栏 -->
                    <div class="main-left-n-tu">
                        <?php 
                    
                    for ($i = 0; $i < $icon; $i++) {
                        $ico = $arr2[$i]['ico'];
                        $icolink = $arr2[$i]['icolink'];
                        //echo $ico;
                        //echo $icolink
                        echo '
                        
                    
                        <a href="'.$icolink.'">
                            <i class="'.$ico.'"></i>
                        </a>
                        <!--a href="">
                            <i class="iconfont icon-bilibili-fill"></i>
                        </a>
                        <a href="">
                            <i class="iconfont icon-zuanshi1"></i>
                        </a>
                        <a href="">
                            <i class="iconfont icon-qq"></i>
                        </a-->';
                    }
                    ?>
                    </div>




                    <!-- 按钮 -->
                    <div class="main-left-n-an">
                        <a href="<?php echo $link;?>">
                            <div class="main-left-n-an-anniu">
                                <b>去我博客</b>
                            </div>
                        </a>
                    </div>
                    <div class="main-left-n-an">

                        <a href="<?php echo $link1;?>">
                            <div class="main-left-n-an-anniu">
                                <b>联系方式</b>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
            <!-- 中间内容左边 end↑ -->





           











            <!-- 中间内容右边 -->
            <div class="main-right">
                <div class="main-right-background">
                    <img src="<?php
                    echo $background;
                    ?>" alt="">  
                </div>
            </div>
            <!-- 中间内容右边 end↑ -->


        </div>
        <!-- 中间内容 end↑ -->
 
 
 
 
 <script>
 window.difyChatbotConfig = { 
  token: 'ghcT7ZyfnWDmcF8f'
 }
</script>
<script
 src="https://udify.app/embed.min.js"
 id="ghcT7ZyfnWDmcF8f"
 defer>
</script>
        
      


        <!--底部版权-->
        <div class="footer">

            <!-- 左侧 -->
            <div class="zuoce">
                <!-- 标题 -->
                <div class="zuoce-bt">
                    <b>工具</b>
                </div>
                <!-- 内容 -->
                <div class="zuoce-neirong">
                    <?php
                    for ($i = 0; $i < $zc; $i++) {
                         $zccbt = $zgj[$i]['footbt'];
                         $zcclin = $zgj[$i]['footbtlink'];
                         echo '
                    <div class="lj"><a href="'.$zcclin.'">'.$zccbt.'</a></div>
                    <!--div class="lj"><a href=""></a></div-->
                    ';
                    }
                    ?>
                </div>

            </div>


            <!-- 中间 -->
            <div class="zhong">
                <!-- 标题 -->
                <div class="zhong-bt">
                    <b>社交媒体</b>
                </div>
                <!-- 内容 -->
                <div class="zhong-neirong">
                    <?php
                    for ($i = 0; $i < $z; $i++) {
                         $zccbt = $zhong[$i]['footbt'];
                         $zcclin = $zhong[$i]['footbtlink'];
                         echo '
                    <div class="lj"><a href="'.$zcclin.'">'.$zccbt.'</a></div>
                    <!--div class="lj"><a href=""></a></div-->
                    ';
                    }
                    ?>
                </div>

            </div>


            <!-- 右侧 -->
            <div class="youce">
                <!-- 标题 -->
                <div class="youce-bt">
                    <b>友情链接</b>
                </div>
                <!-- 内容 -->
                <div class="youce-neirong">
                    <?php
                    for ($i = 0; $i < $Fr; $i++) {
                         $zccbt = $Friend[$i]['footbt'];
                         $zcclin = $Friend[$i]['footbtlink'];
                         echo '
                    <div class="lj"><a href="'.$zcclin.'">'.$zccbt.'</a></div>
                    <!--div class="lj"><a href=""></a></div-->
                    ';
                    }
                    ?>
                </div>

            </div>



            

        </div>

        <!--版权申明-->
        <div class="Copyright">
            <p>© <?php echo date('Y');?> <a href="zhixie.com">桎邪</a>. All rights reserved.</p>
                
        </div>
























        <!--手机端侧滑栏-->
        <div id="lb" style="display:none" class="android-ce" >
            <!--侧滑栏里的左侧主菜单框架-->

            <div class="android-ce-caidan">
               <!--  头部 -->
                <div class="android-ce-caidan-head">
                    <!-- 头像 -->
                    <div class="tx">
                        <img src="http://qh.qlogo.cn/g?b=sdk&ek=AQQjfONtN9oof2a2fvYXkpuGVptrXxkEqeaKqvmliaw9n7tmOmRpsiaicicU8yic86U0iaSeKQMDvC&s=100&t=1685231746" alt="">
                    </div>
                    <p>桎邪</p>
                </div>

                <!-- 菜单列栏 主内容 -->
                <div class="android-ce-caidanlie">
                    <!-- 列 -->
                    <div class="android-ce-caidanlie-lie">
                        <div class="lj"><a href="./" style="color:#03a9f4">首页</a></div>
                        
                    </div>

                    <!-- 列 -->
                    <?php
                for ($i = 0; $i < $celanlie; $i++) {
                     $bt = $arr4[$i]['lan'];
                     $lian = $arr4[$i]['lanlink'];
                     echo '
                <div class="android-ce-caidanlie-lie">
                        <div class="lj"><a href="'.$lian.'">'.$bt.'</a></div>
                        </div>';
                }
                ?>

                </div>

            </div>
            <!--侧滑栏里的左侧主菜单框架 end↑-->


            <!--侧滑栏里的右侧留出空白点击关闭侧滑--> 
            <button style="width: 20%;max-width: 20%;opacity:0;height: 100vh;border:none">
                <!-- <div class="android-ce-guan" onclick="display('lb')"></div> -->
            </button>

        </div>





        <script src="./assets/js/main.js"></script> 
        <script>
            $(function(){ 
                $("button").click(function(){
                    $(".android-ce").fadeToggle(200);
                });
            })


            
        </script>

        <!--手机端侧滑栏 end↑-->



        











        


        


 

        
        
        
    </div>
    <!--网页主体框架 end↑-->





    






<!--隐藏和显示侧滑栏-->
<script type="text/javascript">
    function display(id){  
        var traget=document.getElementById(id);  
        if(traget.style.display=="none"){  
            traget.style.display="";  
        }else{  
            traget.style.display="none";  
      }  
   }  
</script>





</body>
</html>