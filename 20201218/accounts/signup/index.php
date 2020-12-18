<?php
if ( isset( $_GET[ 'logout' ] ) ) {
    setcookie( "user_name", "", time() - 3600 );
}

// $Id:$ //声明变量 header( "Location:login.php?err=1" );
$log_message = '正常注册窗口流';
$from_box = 1;
if ( isset( $_COOKIE[ "user_name" ] ) && isset( $_COOKIE[ "user_status" ] ) ) {

    if ( $_COOKIE[ "user_status" ] ) {
        $from_box = 2;

        $log_message = "你已登录，点击<a href=" / zh / ">注销</a>。";
    } else {
        $from_box = 2;

        $log_message = "使用*当前*账户登录，或注册新用户";
    }

} elseif ( !( isset( $_POST[ 'username' ] ) || isset( $_POST[ 'password' ] ) ) ) {

    $log_message = "正常注册窗口流";

} else {

    $username = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    //$remember = $_POST[ 'remember' ];

    if ( empty( $username ) || empty( $password ) ) {
        $log_message = "用户名或密码不能为空";
    } else {
        $conn = mysqli_connect( 'localhost', 'paotung', 'Pw000000', 'accounts' );
        $sql_select = "SELECT username FROM users WHERE username = '$username'";
        $ret = mysqli_query( $conn, $sql_select );
        $row = mysqli_fetch_array( $ret );
        if ( $username == $row[ 'username' ] ) {

            $log_message = "用户存在，请更换 ";
        } else {

            $sql_insert = "INSERT INTO users(username,password) VALUES('$username','$password')";
            mysqli_query( $conn, $sql_insert );
            setcookie( "user_status", "loggedin", time() + 3600 );
            setcookie( "user_name", $username, time() + 3600 );
            $from_box = 2;
            $log_message = "注册成功，使用*当前* 登录 ";
        }
        mysqli_close( $conn );
    }
}
?>
<?php
$indexhead = "../index-head.php";
$indexmenu = "../index-menu.php";
$localfile = $_SERVER[ 'DOCUMENT_ROOT' ] . "/connect/account.php";

if ( file_exists( "$localfile" ) ) {
    include "$localfile";
} else {
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/head/index-globalhead.php";
    echo "<br><br><br><br>载入本地文件失败，返回主页<br><br><br><br>";
    include $_SERVER[ 'DOCUMENT_ROOT' ] . "/zh/footer/index-globalfooter.php";
}


//$localnav = "index-localnav.php";
//$localcontent = "index-localcontent.php";
//$localdatabase = "index-localdatabase.php";