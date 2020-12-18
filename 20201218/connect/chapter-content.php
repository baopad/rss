<?php
//******分别获取一级、二级、三级文件夹目录******
$lang = '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 1 ];
$chapterbox = @( $lang . '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 2 ] );
$localbox = @( $chapterbox . '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 3 ] );
//******导入头文件及一级全局导航******
include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/header/index-globalhead.php";

$indexnav = "index-nav.php";
$indexsection = "index-section.php";
//是否使用数据库
$useddatabase = 0;
?>
<main id="chaptercontent">
    <input type="checkbox" id="lc-menustates">
    <div id="cc-content">
        <div class="cc-content-case">
            <?php
			file_exists( $indexnav ) ? include $indexnav : print "读取标题失败";
			file_exists( $indexsection ) ? include $indexsection : print "读取菜单失败";

            ?>
        </div>
    </div>
</main>
<?php
include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/footer/index-globalfooter.php";
