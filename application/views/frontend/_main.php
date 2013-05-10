    <div id="site_content">
        <div id="sidebar_container">
            <img class="paperclip" src="img/paperclip.png" alt="paperclip" />
            <div class="sidebar">
                <h4>登陆帐号</h4>
                <form name="MyForm" action="response_normal.php" method="post" onsubmit="xmlhttpPost('response_ajax.php', 'MyForm', 'MyResult', '<img src=\'pleasewait.gif\'>'); return false;">
                    <input name="username" type="text" placeholder="用户名" />
                    <input name="password" type="password" placeholder="密码" />
                    <button class="btn btn-primary">登陆</button>
                    <a class="btn btn-info" href="#" id="reg" name="reg" onclick="return false;">注册</a>
                    <a class="btn btn-inverse" href="#" id="forgot" name="forgot">忘记密码</a>
                </form>
                <div id="fpw" title="忘记密码">
                    <p>忘记密码</p>
                </div>
            </div>
            <img class="paperclip" src="img/paperclip.png" alt="paperclip" />
            <div class="sidebar">
                <h4>广告连接</h4>
                <p>We have just launched our new website. Take a look around, we'd love to know what you think.....<br /><a href="#">read more</a></p>
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
                        <img src="img/2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/2.png" alt="">
                    </div>
                </div>
            </div>
            <h3>为什么大家都喜欢玩无限元宝《卓越仙风道》？</h3>
            <ul>
                <li>本服设置、100倍经验，100倍副本，升级超快，不删档，长久稳定。</li>
                <li>更新、上线就送99999邦定元宝，在商城使用时打勾右上角的邦定元宝销费栏</li>
                <li>更新、推广代码可以获得大量不邦定元宝,本周充值100%送，多充多送！</li>
                <li>新区开放，超人气PK超爽服，公益雷锋服，更多的游戏乐趣，自己来体检吧！</li>
                <li>在线客服QQ：752309377 游戏玩家群号：69707972</li>
            </ul>
        </div>
    </div>