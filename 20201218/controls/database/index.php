<?php
//******分别获取一级、二级、三级文件夹目录******
$lang = '/' . trim( explode( '/' , $_SERVER[ 'PHP_SELF' ] )[ 1 ] , '/' );
//$lang = '/' . explode( '/' , $_SERVER[ 'PHP_SELF' ] )[ 1 ];
$localnav = @($lang . '/' . explode( '/' , $_SERVER[ 'PHP_SELF' ] )[ 2 ]);
$localcontent = @($localnav . '/' . explode( '/' , $_SERVER[ 'PHP_SELF' ] )[ 3 ]);
//******导入头文件及一级全局导航******
include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/head/index-globalhead.php";
//echo $lang.$localnav.$localcontent;
//
//
//*************二级本地导航*************
@(include $_SERVER[ 'DOCUMENT_ROOT' ] . "$localnav/index-localnav.php");
//*************三级文件正文*************
@(include $_SERVER[ 'DOCUMENT_ROOT' ] . "$localcontent/index-localcontent.php");
//
//
//******导入页尾文件******
include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/footer/index-globalfooter.php";