<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| 网站设定
| -------------------------------------------------------------------
*/
$config['website_setting']['title_name'] = '飘渺雪域功能网站系统'; //页面名称
$config['website_setting']['site_name'] = '飘渺雪域'; //网站名称
$config['website_setting']['web_description'] = ''; //网站描述
$config['website_setting']['web_keywords'] = ''; //网站关键词
$config['website_setting']['footer_name'] = ''; //页尾名
$config['website_setting']['affiliate_gold_perip'] = 1000; //每个IP获得元宝数
$config['website_setting']['email_encrypt_key'] = "encrypt"; //找回密码连结加密 key
$config['website_setting']['qq_number1'] = "415096837"; //QQ 客服1
$config['website_setting']['qq_number2'] = ""; //QQ 客服2
$config['website_setting']['qq_group1'] = "7654321"; //QQ 群1
$config['website_setting']['qq_group2'] = ""; //QQ 群2

//充值说明 (可用HTML代码)
$config['website_setting']['pay_description'] = "<font color='#f00' size='4'>1.充值说明</font><br><br><font color='#f00' size='4'>2.元宝比例 1:30000  充值用户请注意！！“充值前游戏一定要下线。”</font>";
$config['website_setting']['pay_link'] = "http://pay.cxtzf.com/buy/group.asp?userid=2788&groupid=1652"; //充值连结
/*
| -------------------------------------------------------------------
| 电邮设定
| -------------------------------------------------------------------
*/
$config['email_setting']['type'] = "​​SMTP"; //设定寄信方式  选项 ​​SMTP，Mail，Sendmail，Qmail（大小写要一样）
$config['email_setting']['SMTPAuth'] = true; //设定SMTP需要验证
$config['email_setting']['SMTPSecure'] = 'ssl'; //SMTP主机需要使用SSL连线
$config['email_setting']['Host'] = 'smtp.gmail.com'; //SMTP 服务器地址
$config['email_setting']['Port'] = '465'; //SMTP 端口
$config['email_setting']['CharSet'] = 'utf-8'; //设定邮件编码
$config['email_setting']['Username'] = 'macaunero@gmail.com'; //SMTP 用户账号
$config['email_setting']['Password'] = 'NEIKO.R2001523515'; //SMTP 密码
$config['email_setting']['From'] = "test@test.com"; //设定寄件者信箱
$config['email_setting']['FromName'] = "test"; //设定寄件者姓名
$config['email_setting']['SMTPDebug'] = false; //除错模式
$config['email_setting']['IsHTML'] = true; //设定邮件内容为HTML
/*
| -------------------------------------------------------------------
| 游戏设定
| -------------------------------------------------------------------
*/
$config['game_setting']['servers'] = array(
	                                     "一服" => array("127.0.0.1:8080","127.0.0.1:8081") //"服务器名" => array("IP:端口","IP:端口2")
	                                     //,"二服" => array("127.0.0.2:8080","127.0.0.2:8081")
                                     );
$config['game_setting']['isFullScreen'] = 1; //是否全屏 1:是 0:否
/* End of file vars.php */
/* Location: ./application/config/vars.php */