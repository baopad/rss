<nav id="globalnav">
    <input type="checkbox" id="gn-menustates">
    <input type="checkbox" id="gn-secondarystates">
    <div id="gn-content"> 
        <!--Narrow navigation Bar-->
        <div class="gn-header">
            <ul class="gn-header-case">
                <li class="gn-header-menuicon">
                    <label class="gn-header-menuicon-label" for="gn-menustates">
                    <div class="gn-header-menuicon-label-case">
                        <div class="gn-header-menuicon-label-top">
                            <div class="gn-header-menuicon-label-top-crust"> </div>
                        </div>
                        <div class="gn-header-menuicon-label-midd">
                            <div class="gn-header-menuicon-label-midd-crust"> </div>
                        </div>
                        <div class="gn-header-menuicon-label-bottom">
                            <div class="gn-header-menuicon-label-bottom-crust"></div>
                        </div>
                    </div>
                    </label>
                </li>
                <li class="gn-header-logo"><a href="/zh/">PAOTUNG</a></li>
                <li class="gn-header-secondary">
                    <label class="gn-header-secondary-link" for="gn-secondarystates">
                        <svg viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" class="gn-header-secondary-icon">
                            <path d="M146.8 142.6h-37.6c-31.1 0-56.5 25.3-56.5 56.5 0 5.2 4.2 9.4 9.4 9.4h131.8c5.2 0 9.4-4.2 9.4-9.4 0-31.2-25.3-56.5-56.5-56.5zM128 130.7c20.1 0 36.4-16.3 36.4-36.4v-9.4c0-20.1-16.3-36.4-36.4-36.4S91.6 64.8 91.6 84.9v9.4c0 20.1 16.3 36.4 36.4 36.4z"></path>
                        </svg>
                    </label>
                </li>
            </ul>
        </div>
        <!--Primary navigation Bar-->
        <div class="gn-list">
            <ul class="gn-list-case">
                <li class="gn-list-item gn-list-logo"> <a href="<?php echo "$lang";?>">首页</a></li>
                <li class="gn-list-item"><a href="/zh/lamp/">LAMP</a></li>
                <li class="gn-list-item"><a href="/zh/">代理通讯</a></li>
                <li class="gn-list-item"><a href="/accounts/">账号系统</a></li>
                <li class="gn-list-item"><a href="/zh/">资源</a> </li>
                <li class="gn-list-item"><a href="<?php echo "$lang";?>">地图</a></li>
                <li class="gn-list-item"><a href="<?php echo "$lang";?>">数据</a></li>
                <li class="gn-list-item"><a href="<?php echo "$lang";?>">计算</a></li>
                <li class="gn-list-item"><a href="<?php echo "$lang";?>">公众号</a></li>
            </ul>
        </div>
        <!--Additional navigation Bar-->
        <div class="gn-secondary">
            <ul class="gn-secondary-case">
                <input type="checkbox" id="gn-secondaryproduct">
                <li class="gn-secondary-product">
                    <div class="gn-secondary-product-title">
                        <label class="gn-secondary-product-link" for="gn-secondaryproduct"><span>产品</span></label>
                    </div>
                    <ul class="gn-secondary-product-list">
                        <li class="gn-secondary-product-list-item"><a href="<?php echo "$lang";?>">电子邮件</a></li>
                        <li class="gn-secondary-product-list-item"><a href="/phpmyadmin/">数据库</a></li>
                        <li class="gn-secondary-product-list-item"><a href="<?php echo "$lang";?>/filemanager/">全局文件管理(高权限操作)</a></li>
                        <li class="gn-secondary-product-list-item"><a href="/controls/">网站管理中心(root)</a></li>
                    </ul>
                </li>
                <input type="checkbox" id="gn-secondaryid">
                <li class="gn-secondary-id">
                    <div class="gn-secondary-id-title">
                        <label class="gn-secondary-id-link" for="gn-secondaryid"><span>登录</span></label>
                    </div>
                    <ul class="gn-secondary-id-list">
                        <li class="gn-secondary-product-id-item"><a href="<?php echo "$lang";?>">登录账号</a></li>
                        <li class="gn-secondary-product-id-item"><a href="<?php echo "$lang";?>">登录账号</a></li>
                        <li class="gn-secondary-product-id-item"><a href="<?php echo "$lang";?>">资料信息</a></li>
                        <li class="gn-secondary-product-id-item"><a href="<?php echo "$lang";?>">退出登录</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
