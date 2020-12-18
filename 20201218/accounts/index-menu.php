<div class="lc-menu">
    <ul class="lc-menu-case">
        <?php if ( !isset ( $_COOKIE[ "user_status" ] ) ) {?>
        <li class="lc-menu-item"><a href="/accounts/login/">登录</a> </li>
        <li class="lc-menu-item"><a href="/accounts/signup/">注册</a> </li>
        <?php } ?>
        <?php if ( isset ( $_COOKIE[ "user_status" ] ) ) {?>
        <li class="lc-menu-item"><a href="/accounts/overview/">信息</a> </li>
        <li class="lc-menu-item"><a href="/accounts/edit/">设置</a> </li>
        <li class="lc-menu-item"><a href="/accounts/login/?logout">注销</a> </li>
        <?php } ?>
        <li class="lc-menu-item"><a href="/accounts/faq/">常见问题</a> </li>
    </ul>
</div>
