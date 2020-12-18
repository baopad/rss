<?php
if ( !isset( $indexhead ) ) {
    $indexhead = "../index-head.php";
}
if ( !isset( $indexmenu ) ) {
    $indexmenu = "../index-menu.php";
}



$indexSt = $_SERVER[ 'DOCUMENT_ROOT' ] . "/connect/account-subs.php"; 
file_exists( $indexSt ) ? include $indexSt : print "读取失败";
?>