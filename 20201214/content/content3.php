<?php
//******分别获取一级、二级、三级文件夹目录******
$lang = '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 1 ];
$chapterbox = @( $lang . '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 2 ] );
$localbox = @( $chapterbox . '/' . explode( '/', $_SERVER[ 'PHP_SELF' ] )[ 3 ] );
//******导入头文件及一级全局导航******
include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/head/index-globalhead.php";

$localnav = "index-localnav.php";
$localcontent = "index-localcontent.php";
$localdatabase = "index-localdatabase.php";
//是否使用数据库
$useddatabase = 0;
?>
<main id="localnav">
    <input type="checkbox" id="ln-menustates">
    <div id="ln-content">
        <div class="ln-menu-case">
            <?php
            if ( file_exists( $localnav ) ) {


                //载入本地页头
                include $localnav;
                //载入本地文件
                if ( file_exists( $localcontent ) && !$useddatabase ) {
                    //载入本地文件
                    
                    include $localcontent;
                } else {
                    //载入库文件
                    echo "database";
                    include $localdatabase;
                }


            } else {
                echo "读取本地文件失败，返回主页";;
            }
			
            ?>
        </div>
    </div>
</main>
<?php 
include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/footer/index-globalfooter.php";