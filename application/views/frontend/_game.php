<html>
<head>
    <title><?=$site_name?>(<?=$serverName;?>) - <?=$title_name?></title>
    <meta charset="utf-8" />
    <meta name="description" content="<?=$web_description?>" />
    <meta name="keywords" content="<?=$web_keywords?>" />
    <meta name="author" content="415096837@qq.com" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <meta http-equiv="Pragma" content="no-cache">
    <meta content="MSHTML 6.00.2900.5726" name="generator">
    <script src="<?=base_url('js/swfobject.js');?>"></script>
    <link rel="stylesheet" href="<?=base_url('css/gamestyle.css');?>" />
    <script>
        var userid = "";
        var username = "nero";
        var time ="1";
        var flag = "1";
        var cm ="1";
        var server = "<?=$server;?>";
        var favoriteUrl="http://pm.shtc123.com/";
        var loginUrl="http://pm.shtc123.com/";
        var regUrl="http://pm.shtc123.com/";
        var payUrl="http://pm.shtc123.com/";
        var logUrl= "";
        var serverName="<?=$serverName;?>";
        var lineName= "<?=$lineName;?>";
        var govUrl = "http://pm.shtc123.com/";
        var forumUrl = "http://pm.shtc123.com/";
        var deskUrl = "http://pm.shtc123.com/";
        var use_localconnection = "";
        var multiServerId = "1";
        var isLogout = 0;

        if( username <=0 ) {window.location.href = loginUrl;}
        function onBeforeClose() {
            if(isLogout == 0) {return "您确定要离开此页面吗？";} else return "";
        }
        function setFlag(f) {isLogout = 0;}
        function setEnable(b,url) {
            if(b) {
                document.getElementById("payhref").href = url;
                document.getElementById("payhref").target = "_blank";
            } else {
                document.getElementById("payhref").href = "javascript:void(0);";
                document.getElementById("payhref").target = "";
            }
            return true;
        }
    </script>
</head>
<body scroll="no" onunload="reload();" onload="document.getElementById('pmxy').focus();">
    <div id="showgame">
        <script>
            var so = new SWFObject("<?=base_url('source');?>/GameLoader.swf?v=<?=time();?>", "pmxy", "1000", "580", "9", "#000000");
            so.addParam("quality", "high");
            so.addParam("name", "pmxy");
            so.addParam("id", "pmxy");
            so.addParam("align", "middle");
            so.addParam("AllowScriptAccess", "always");
            so.addParam("menu", "false");
            so.addParam("pluginspage", "http://www.adobe.com/go/getflashplayer");
            so.write("showgame");

            function showFavourite() {
                var title=document.title;
                try {window.external.addFavorite(govUrl, title);}
                catch (e) {
                    try {window.sidebar.addPanel(title, govUrl, "");}
                    catch (e) {alert("您可以通过 Ctrl+D 组合键添加【<?=$site_name;?>】到您的收藏夹中。");}
                }
                return true;
            }
            function reload() {showFavourite();}

            function intofullscreen() {
                document.getElementById('pmxy').width = "100%";
                document.getElementById('pmxy').height = "100%";
                document.getElementById('nav').style.display = "none";
            }
            function exitfullscreen() {
                document.getElementById('pmxy').width = 1000;
                document.getElementById('pmxy').height = 580;
                document.getElementById('nav').style.display = "block";
            }
            try {
                window.onerror = function(msg,url,l) {
                    var txt = "There was an error on this page.\n\n";
                    txt += "Error: " + msg + "\n";
                    txt += "URL: " + url + "\n";
                    txt += "Line: " + l + "\n\n";
                    txt += "Click OK to continue.\n\n";
                    return true;
                };
            } catch(ex) {}

            try {
                if(!window.onbeforeunload) window.onbeforeunload = function(){return "离开《<?=$site_name;?>》游戏页面";}
            } catch(e){}
            var isFull = <?php echo $isFullScreen; ?>;
            if(isFull == 1) intofullscreen();
        </script>
        <iframe name="inner" id="inner" marginwidth="0" marginheight="0" frameborder="0" style="display:none" src="pageloadedlog.html?type=-1&t=<?php echo time();?>"></iframe>
    </div>
</body>
</html>