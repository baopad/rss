<?php
if ( isset( $_GET[ 'logout' ] ) ) {
    setcookie( "user_name", "", time() - 3600 );
}

// $Id:$ //声明变量 header( "Location:login.php?err=1" );
$log_message = '正常注册窗口流';
$from_box = 1;
if ( isset( $_COOKIE[ "user_name" ] ) ) {

    if ( isset( $_COOKIE[ "user_status" ] ) ) {
		$from_box = 2;
        $log_message = "你已登录，返回<i>首页</>.";
    } else {
		$from_box = 1;
        $log_message = "点击使用此账户登录，点击88使用新账户注册（点击清理cook）";
    }

} elseif ( !( isset( $_POST[ 'username' ] ) || isset( $_POST[ 'password' ] ) ) ) {

    $log_message = "A正常登录窗口";

} else {

    $username = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    //$remember = $_POST[ 'remember' ];

    if ( empty( $username ) || empty( $password ) ) {
        $log_message = "用户名或密码不能为空";
    } else {

        $conn = mysqli_connect( 'localhost', 'paotung', 'Pw000000', 'accounts' );
        $sql_select = "SELECT username,password FROM users WHERE username = '$username' AND password = '$password'";
        $ret = mysqli_query( $conn, $sql_select );
        $row = mysqli_fetch_array( $ret );

        if ( $username == $row[ 'username' ] ) {

            setcookie( "user_name", $username, time() + 30 * 24 * 3600 );
			setcookie( "user_status", $username, time() + 365 * 24 * 3600 );
            $from_box = 2;
			$log_message = "登录成功，点击返回主页";
            if ( $remember == "on" ) {
                setcookie( "user_name", $username, time() + 365 * 24 * 3600 );
				setcookie( "user_status", $username, time() + 365 * 24 * 3600 );
            }
            
        } else {
            $log_message = "用户名或密码错误 ";
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