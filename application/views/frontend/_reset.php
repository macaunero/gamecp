    <div id="site_content">
        <div id="sidebar_container">
            <img class="paperclip" src="<?=base_url('img/paperclip.png');?>" alt="paperclip" />
            <div class="sidebar">
                <h4>在线客服</h4>
                <span class="qq">QQ 客服: <?=$qq_number1;?> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?=$qq_number1;?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?=$qq_number1;?>:51" alt="<?=$site_name;?>客服一" title="<?=$site_name;?>客服一"/></a></span>
                <? if (!empty($qq_number2)) {?> <span class="qq">QQ 客服: <?=$qq_number2;?> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?=$qq_number2;?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?=$qq_number2;?>:51" alt="<?=$site_name;?>客服二" title="<?=$site_name;?>客服二"/></a></span><?}?>
                <span class="qq">QQ 一群: <?=$qq_group1;?></span>
                <? if (!empty($qq_group2)) {?> <span class="qq">QQ 二群: <?=$qq_group2;?></span><?}?>
            </div>
        </div>
        <div id="content" class="rpw">
            <h3>重设密码</h3>
            电邮: <input class="input" id="rpw_email" name="rpw_email" type="text" value="<?=$email;?>" disabled />
            密匙: <input class="input" id="rpw_key" name="rpw_key" type="text" value="<?=$code;?>" disabled />
            密码: <input class="input" id="rpw_pw" name="rpw_pw" type="text" />
            <button id="rpw" class="btn btn-primary btn_rpw">重设密码</button>
            <div class="rpw_err_msg"></div>
        </div>
    </div>