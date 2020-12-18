<div class="lc-article" style="display: no ne">
    <div class="lc-article-case"> 
        <!--*************************起始正文*******#localcontent******************-->
        <div><br>
            <span>创建PAOTUNG账户</span><br>
            <br>
        </div>
        <!--中部-->
        <div class=" " style="width: 500px;margin: 0 auto;padding: 40px; box-shadow: 0 0 8px 4px rgba(0, 0, 0, .2);">
            <?php if ( $from_box==1 ) {?>
            <form action=" " method="post">
                <div style="display: flex;flex-direction: column;">
                    <label class=" " style=""><span>用户名</span></label>
                    <input type="text" id="id_name" name="username" required="required">
                </div>
                <div style="display: flex;flex-direction: column;">
                    <div style="display: flex;justify-content: space-between;">
                        <label class=" "><span>密 码</span></label>
                        <div>Show</div>
                    </div>
                    <input type="password" id="password" name="password" required="required">
                </div>
                <div class=" "  style="display: flex;flex-direction: column;">
                    <p class=" "> Create Account, I agree to  terms, privacy policy, and cookie policy. </p>
                </div>
                <div class=" " > <?php echo $log_message; ?></div>
                <div>
                    <input type="submit" id="register" name="register" value="注册 Create Account">
                </div>
            </form>
            <div class=" "><a href="../login">Already have an account? Log in</a></div>
            <?php } ?>
            <?php if ( $from_box==2 ) {?>
            <div action=" " method="post">
                <div >
                    <p class=" "><?php echo $log_message; ?></p>
                </div>
      
                <div class=" " > 更多服务进入主页</div>
                <div> </div>
            </div>
            <?php } ?>
        </div>
        <!--*************************结束*************************--> 
    </div>
</div>
