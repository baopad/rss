<?php
//******分别获取一级、二级、三级文件夹目录******
$lang = '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 1 ];
$chapterbox = @( $lang . '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 2 ] );
$localbox = @( $chapterbox . '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 3 ] );
//******导入头文件及一级全局导航******
include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/header/index-globalhead.php";


$indexhead = "index-head.php";
$indexmenu = "index-menu.php";
$indexlist = "index-list.php";
$indexarticle = "index-article.php";
$indexdatabase = 0;


?>
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
<?php
include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/footer/index-globalfooter.php";
