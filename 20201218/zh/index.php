<?php
//******分别获取一级、二级、三级文件夹目录******
$lang = '/' . explode( '/' , $_SERVER[ 'PHP_SELF' ] )[ 1 ];
$localnav = @($lang . '/' . explode( '/' , $_SERVER[ 'PHP_SELF' ] )[ 2 ]);
$localcontent = @($localnav . '/' . explode( '/' , $_SERVER[ 'PHP_SELF' ] )[ 3 ]);
//******导入头文件及一级全局导航******
include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/head/index-globalhead.php";
//echo $lang.$localnav.$localcontent;
//
//
//*************一级页面调用mian文件夹为本地导航*************
@(include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/main/index-localnav.php");
//*************一级页面调用mian子文件overview为正文*************
@(include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/main/overview/index-localcontent.php");
//
//
//******导入页尾文件******
include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/footer/index-globalfooter.php";