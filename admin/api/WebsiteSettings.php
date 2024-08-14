<?php
$scok = '0'; //网站开关  0为开  1为关
$scoks = '网站维护中,暂时关闭站点';//网站关闭说明
//------------------------------------------------------------↑网站维护开关↑-----------------------------------------------------------------

//-------------------------------------------------------------网站基本设置↓------------------------------------------------------------------
$array = [
      'title' =>'桎邪 | 上宫 困',//网站title名字
      
      'qq' =>'2675740966',//你的qq号 用于显示头像
      
      'nc'=>'上宫 困',//你的昵称 用于首页显示
      'sdbt' => '<span style="color:#0a274d">hello! 我是</span><span style="color:#03a9f4">上宫 困</span>', //首页大标题
      
      'Introduction'=>'欢迎访问我的 <span style="color:#03a9f4">个人主页</span> 在这里<span style="color:#03a9f4">你</span>可以查看我的<span style="color:#03a9f4">最新动态</span> 以及访问我的<span style="color:#03a9f4">其他网站</span>',//介绍
      
      'Introductionn'=>'远赴人间惊鸿宴，一睹人间盛世颜',//介绍2
      
      'Introductionnn'=>'每天都是最好的自己',//介绍3
      
      'link'=>'./index.php',//介绍下面的 '去我博客' 按钮 点击后跳转的网址

      'link1'=>'',//介绍下面的 '加我QQ群' 按钮 点击后跳转的网址

  ];
  $title = $array ['title'];
  $qq= $array ['qq'];
  $nc= $array ['nc'];
  $Introduction= $array ['Introduction'];
  $Introductionn= $array ['Introductionn'];
  $Introductionnn= $array ['Introductionnn'];
  $link=$array ['link'];
  $link1=$array ['link1'];
  $sdbt=$array ['sdbt'];

  
  
  

//-------------------------------------------------------------首页小图标设置------------------------------------------------------------------
   $arr2 = array(
    array(
       'ico' =>'iconfont icon-xinlangweibo',//图标  这里只设置了4个图标可以自己添加 但是不要太多
      'icolink' =>''//点击后的跳转链接
    ),
    
    array(
       'ico' =>'iconfont icon-bilibili-fill',//图标 
      'icolink' =>'https://space.bilibili.com/621831160?spm_id_from=333.1007.0.0'//点击后的跳转链接
    ),
    
    array(
       'ico' =>'iconfont icon-zuanshi1',//图标
      'icolink' =>''//点击后的跳转链接
    ),
    
    array(
       'ico' =>'iconfont icon-xinxi',//图标
      'icolink' =>'mailto:2675740966@qq.com'//点击后的跳转链接
    ),
    

);
$icon = count($arr2);


  


 
//--------------------------------------------------------------侧滑栏栏目------------------------------------------------------------------
  $arr4 = array(
    array(
       'lan' =>'博客',//标题
      'lanlink' =>'./index.php'//点击后的跳转链接
    ),

    
);
$celanlie = count($arr4);


  




//--------------------------------------------------------------旗下网站域设置------------------------------------------------------------------
  $arrl = array(
     array(
       'title' =>'',//网站名字
       'js' =>'',//网站介绍
      'link' =>'',//点击后的跳转链接
      'img' =>'./assets/img/6.jpg',//图标
    ),
	array(
       'title' =>'',//网站名字
       'js' =>'',//网站介绍
      'link' =>'',//点击后的跳转链接
      'img' =>'./assets/img/qun.jpg',//图标
    ),
    array(
       'title' =>'',//网站名字
       'js' =>'',//网站介绍
      'link' =>'',//点击后的跳转链接
      'img' =>'./assets/img/6.jpg',//图标
    ),
    // array(
    //    'title' =>'',//网站名字
    //    'js' =>'',//网站介绍
    //   'link' =>'',//点击后的跳转链接
    //   'img' =>'./assets/img/deep.jpg',//图标
    // ),
   
    
    
    
    
);
$wzyl = count($arrl);







 
//--------------------------------------------------------------底部区域设置------------------------------------------------------------------
//左侧工具
  $zgj = array(
    array(
       'footbt' =>'',//标题
      'footbtlink' =>''//点击后的跳转链接
    ),
    array(
       'footbt' =>'',//标题
      'footbtlink' =>''//点击后的跳转链接
    ),
    array(
       'footbt' =>'',//标题
      'footbtlink' =>''//点击后的跳转链接
    ),
    array(
       'footbt' =>'',//标题
      'footbtlink' =>''//点击后的跳转链接
    ),
    
    
);
$zc = count($zgj);





//中间
$zhong = array(
    array(
       'footbt' =>'微博',//标题
      'footbtlink' =>'#'//点击后的跳转链接
    ),
    array(
       'footbt' =>'Bilibili 哔哩哔哩',//标题
      'footbtlink' =>'https://space.bilibili.com/621831160?spm_id_from=333.1007.0.0'//点击后的跳转链接
    ),
    
    
);
$z = count($zhong);





//右边友链
$Friend = array(
    array(
       'footbt' =>'',//标题
      'footbtlink' =>''//点击后的跳转链接
    ),
    
    array(
       'footbt' =>'',//标题
      'footbtlink' =>''//点击后的跳转链接
    ),
    
    
    
);
$Fr = count($Friend);







?>