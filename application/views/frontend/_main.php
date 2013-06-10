    <div id="site_content">
        <div id="sidebar_container">
            <img class="paperclip" src="<?=base_url('img/paperclip.png');?>" alt="paperclip" />
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
                        <a href="javascript:void(0);" onclick="document.getElementById('securimg1').src = '<?=site_url('securimg?id='.md5(uniqid(time())))?>' + this.blur(); return false;"><img id="securimg1" name="securimg1" src="<?=base_url('img/click.png');?>" alt="点击看验证码" title="点击刷新" /></a><input class="vcode" id="fpw_vcode" name="fpw_vcode" type="text" placeholder="先点击刷新看验证码，再输入验证码" />
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
                        <a href="javascript:void(0);" onclick="document.getElementById('securimg2').src = '<?=site_url('securimg?id='.md5(uniqid(time())))?>' + this.blur(); return false;"><img id="securimg2" name="securimg2" src="<?=base_url('img/click.png');?>" alt="点击看验证码" title="点击刷新" /></a><input class="vcode" id="reg_vcode" name="reg_vcode" type="text" placeholder="先点击刷新看验证码，再输入验证码" />
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
                    <label>元宝: <?=$gold;?>个</label>
                    <a class="btn btn-info" href="javascript:void(0);" id="getgold">领取元宝</a> <a class="btn btn-info" href="javascript:void(0);" id="paymoney" >充值</a><a class="btn btn-inverse" href="javascript:void(0);" id="logout" name="logout" onclick="logout();">登出</a>
                    <label><a class="btn btn-primary" href="javascript:void(0);" id="game" name="game">进入游戏</a></label>
                </div>
                <div id="pay" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">充值</h3>
                    </div>
                    <div class="modal-body">
                        <?=$pay_description;?>
                    </div>
                    <div class="modal-footer">
                        <a id="golink" class="btn btn-primary" href="<?=$pay_link;?>" >进入充值</a>
                    </div>
                </div>
                <div id="gold" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">领取元宝</h3>
                    </div>
                    <div class="modal-body">
                        <font>选择服务器: <select id="serverid" name="serverid"><?php foreach($server_name as $key => $value): ?><option value="<?=$key;?>"><?=$value;?></option><?php endforeach; ?></select></font><br><br>
                        <span>注意：</span><span>1、充值前请先下线等待2分后导航私人消息，充值成功后，2分钟后登录。</span><span>2、请玩家遵守以上规则，元宝不到账不予理睬！</span>
                        <input id="charge_name" name="charge_name" type="hidden" value="<?=$acc_name;?>" />
                        <div class="gold_err_msg"></div>
                    </div>
                    <div class="modal-footer">
                        <button id="putgold" class="btn btn-primary" data-dismiss="modal" aria-hidden="true" >将元宝冲入游戏</button>
                    </div>
                </div>
                <div id="selectgame" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">选择服务器</h3>
                    </div>
                    <div class="modal-body">
                        <font>选择服务器: <select id="gserverid" name="gserverid"><?php foreach($server_name as $key => $value): ?><option value="<?=$key;?>"><?=$value;?></option><?php endforeach; ?></select></font>
                    </div>
                    <div class="modal-footer">
                        <button id="gotogame" class="btn btn-primary" data-dismiss="modal" aria-hidden="true" >进入游戏</button>
                    </div>
                </div>
                <? } ?>
            </div>
            <img class="paperclip" src="img/paperclip.png" alt="paperclip" />
            <div class="sidebar">
                <h4>在线客服</h4>
                <span class="qq">QQ 客服: <?=$qq_number1;?> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?=$qq_number1;?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?=$qq_number1;?>:51" alt="<?=$site_name;?>客服一" title="<?=$site_name;?>客服一"/></a></span>
                <? if (!empty($qq_number2)) {?> <span class="qq">QQ 客服: <?=$qq_number2;?> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?=$qq_number2;?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?=$qq_number2;?>:51" alt="<?=$site_name;?>客服二" title="<?=$site_name;?>客服二"/></a></span><?}?>
                <span class="qq">QQ 一群: <?=$qq_group1;?></span>
                <? if (!empty($qq_group2)) {?> <span class="qq">QQ 二群: <?=$qq_group2;?></span><?}?>
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