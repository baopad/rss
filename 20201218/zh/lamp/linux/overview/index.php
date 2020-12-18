<?php

$localfile = $_SERVER[ 'DOCUMENT_ROOT' ] . "/content/content4.php";

if ( file_exists( "$localfile" ) ) {
    include "$localfile";
} else {
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/head/index-globalhead.php";
    echo "<br><br><br><br>载入本地文件失败，返回主页<br><br><br><br>";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "$lang/footer/index-globalfooter.php";
}


//$localnav = "index-localnav.php";
//$localcontent = "index-localcontent.php";
//$localdatabase = "index-localdatabase.php";
