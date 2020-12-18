<?php
//******分别获取一级、二级、三级文件夹目录******
$lang = '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 1 ];
$chapterbox = @( $lang . '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 2 ] );
$localbox = @( $chapterbox . '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 3 ] );
//******导入头文件及一级全局导航******


if ( !isset( $indexhead ) ) {
    $indexhead = "index-head.php";
}
if ( !isset( $indexmenu ) ) {
    $indexmenu = "index-menu.php";
}
if ( !isset( $indexlist ) ) {
    $indexlist = "index-list.php";
}
if ( !isset( $indexarticle ) ) {
    $indexarticle = "index-article.php";
}
if ( !isset( $indexdatabase ) ) {
    $indexdatabase = 0;
}
?>

<!doctype html>
<html lang="<?php echo "$lang";?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="PAOTUNG">
<meta name="description" content="paotung website">
<?php // 全局页头样式（一级） ?>
<link rel="stylesheet" type="text/css" href="/styles/globalstyles/globalstrap.css">
<link rel="stylesheet" type="text/css" href="/styles/globalstyles/globalnav.css">
<?php // 区域页头样式（二级） ?>
<?php // 本地页面样式（三级） ?>
<!--<link rel="stylesheet" type="text/css" href="/styles/account-content.css">--> 
<!--	使用通用格式-->
<link rel="stylesheet" type="text/css" href="/styles/globalstyles/localcontent.css">
<?php // 全局页尾样式 ?>
<link rel="stylesheet" type="text/css" href="/styles/globalstyles/globalfooter.css">
<link rel="shortcut icon" href="/favicon/globalfavicon/favicon-pt.ico" type="image/x-icon">
<link rel="icon" href="/favicon/globalfavicon/favicon-pt_96.png" sizes="96">
<title>PAOTUNG</title>
</head>
<body style="direction:ltr;">
<?php include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/header/index-globalhead.php";  ?>
<main id="localcontent">
    <input type="checkbox" id="lc-menustates">
    <div id="lc-content">
        <div class="lc-content-case">
            <?php
            file_exists( $indexhead ) ? include $indexhead : print "读取标题失败";
            file_exists( $indexmenu ) ? include $indexmenu : print "读取菜单失败";
            file_exists( $indexlist ) ? include $indexlist : print "读取条目失败";
            file_exists( $indexarticle ) ? include $indexarticle : print "读取文字失败";
            ?>
        </div>
    </div>
</main>
</body>
</html>
