    <div id="site_content">
        <div id="sidebar_container">
            <img class="paperclip" src="<?=base_url('img/paperclip.png');?>" alt="paperclip" />
            <div class="sidebar">
                <h4>广告连接</h4>
                <p>广告.....广告.....<br /><a href="#">更多</a></p>
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