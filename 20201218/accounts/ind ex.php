<?php
$lang = "/zh";

















$localfile = $_SERVER[ 'DOCUMENT_ROOT' ] . "/connect/account.php";

if ( file_exists( "$localfile" ) ) {
    include "$localfile";
} else {
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/header/index-globalhead.php";
    echo "<br><br><br><br>载入本地文件失败，返回主页<br><br><br><br>";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/footer/index-globalfooter.php";
}


//$localnav = "index-localnav.php";
//$localcontent = "index-localcontent.php";
//$localdatabase = "index-localdatabase.php";


//"index-globalhead.php"
//"index-globalfooter.php"
