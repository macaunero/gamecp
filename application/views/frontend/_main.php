    <div id="site_content">
        <div id="sidebar_container">
            <img class="paperclip" src="img/paperclip.png" alt="paperclip" />
            <div class="sidebar showinfo">
                <? if (!$logged_in && is_null($acc_name)) {?>
                <div id="member_panel">
                    <h4>登陆帐号</h4>
                    <input class="input" id="username" name="username" type="text" placeholder="用户名" />
                    <input class="input" id="password" name="password" type="password" placeholder="密码" />
                    <a href="javascript:void(0);" onclick="document.getElementById('securimg').src = '<?=site_url('securimg?id='.md5(uniqid(time())))?>' + this.blur(); return false;"><img id="securimg" name="securimg" src="<?=site_url('securimg?id='.md5(uniqid(time())))?>" alt='captcha' /></a>
                    <input class="vcode" id="vcode" name="vcode" type="text" placeholder="验证码" />
                    <input class="btn btn-primary" type="button" value="登陆" onclick="login();">
                    <a class="btn btn-info" href="javascript:void(0);" id="register" name="register">注册</a>
                    <a class="btn btn-inverse" href="javascript:void(0);" id="forgot" name="forgot">忘记密码</a>
                </div>
                <div id="fpw" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">忘记密码</h3>
                    </div>
                    <div class="modal-body">
                        <input class="input" id="fpw_name" name="fpw_name" type="text" placeholder="请输入用户名" />
                        <input class="input" id="fpw_email" name="fpw_email" type="text" placeholder="请输入电邮" />
                        <a href="javascript:void(0);" onclick="document.getElementById('securimg1').src = '<?=site_url('securimg?id='.md5(uniqid(time())))?>' + this.blur(); return false;"><img id="securimg1" name="securimg1" src="" alt="点击看验证码" title="点击刷新" /></a><input class="vcode" id="fpw_vcode" name="fpw_vcode" type="text" placeholder="请输入验证码" />
                        <div class="fpw_err_msg"></div>
                    </div>
                    <div class="modal-footer">
                        <button id="getpw" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">找回密码</button>
                    </div>
                </div>
                <div id="reg" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">注册帐号</h3>
                    </div>
                    <div class="modal-body">
                        用户名 : <input class="input" id="reg_name" name="reg_name" type="text" placeholder="请输入用户名" />
                        电&nbsp&nbsp&nbsp邮 : <input class="input" id="reg_email" name="reg_email" type="text" placeholder="请输入电邮" />
                        密&nbsp&nbsp&nbsp码 : <input class="input" id="reg_pw" name="reg_pw" type="password" placeholder="请输入密码" />
                        <a href="javascript:void(0);" onclick="document.getElementById('securimg2').src = '<?=site_url('securimg?id='.md5(uniqid(time())))?>' + this.blur(); return false;"><img id="securimg2" name="securimg2" src="" alt="点击看验证码" title="点击刷新" /></a><input class="vcode" id="reg_vcode" name="reg_vcode" type="text" placeholder="请输入验证码" />
                        <div class="reg_err_msg"></div>
                    </div>
                    <div class="modal-footer">
                        <button id="goreg" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">注册</button>
                    </div>
                </div>
                <? } else {?>
                <div id="member_panel">
                    <h4>帐号信息</h4>
                    <label>用户名: <?=$acc_name;?></label>
                    <label>已推广: 0</label>
                    <label>可兑换元宝: 0个</label>
                    <label>元宝: <?=$gold;?>个</label>
                    <a class="btn btn-info" href="#" >推广页</a> <a class="btn btn-info" href="#" >兑换页</a><a class="btn btn-inverse" href="javascript:void(0);" id="logout" name="logout" onclick="logout();">登出</a>
                    <label><a class="btn btn-primary" href="javascript:void(0);" id="game" name="game" onclick="logout();">进入游戏</a></label>
                </div>
                <? } ?>
            </div>
            <img class="paperclip" src="img/paperclip.png" alt="paperclip" />
            <div class="sidebar">
                <h4>广告连接</h4>
                <p>广告.....广告.....<br /><a href="#">更多</a></p>
            </div>
        </div>
        <div id="content">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="img/1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/2.png" alt="">
                    </div>
                </div>
            </div>
            <h3>为什么大家都喜欢玩无限元宝《飘渺雪域》？</h3>
            <ul>
                <li>本服设置、100倍经验，100倍副本，升级超快，不删档，长久稳定。</li>
                <li>更新、上线就送99999邦定元宝，在商城使用时打勾右上角的邦定元宝销费栏</li>
                <li>更新、推广代码可以获得大量不邦定元宝,本周充值100%送，多充多送！</li>
                <li>新区开放，超人气PK超爽服，公益雷锋服，更多的游戏乐趣，自己来体检吧！</li>
                <li>在线客服QQ：xxxxxx 游戏玩家群号：xxxxxx</li>
            </ul>
        </div>
    </div>