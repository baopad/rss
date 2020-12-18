<?php

$localfile = $_SERVER[ 'DOCUMENT_ROOT' ] . "/connect/local-content.php";

if ( file_exists( "$localfile" ) ) {
    include "$localfile";
} else {
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/header/index-globalhead.php";
    echo "<br><br><br><br>载入本地文件失败，返回主页<br><br><br><br>";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/footer/index-globalfooter.php";
}


//$localcontent = "index-localnav.php";   //本地导航文件
//$localcontent = "index-localcontent.php";  //本地内容文件
//$localdatabase = "index-localdatabase.php";  //本地内容数据库模式


//"index-globalheader.php"
//"index-globalfooter.php"
