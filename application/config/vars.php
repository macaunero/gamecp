<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| 网站设定
| -------------------------------------------------------------------
*/
$config['website_setting']['title_name'] = 'XXX功能网站系统'; //页面名称
$config['website_setting']['site_name'] = '飘渺雪域'; //网站名称
$config['website_setting']['web_description'] = ''; //网站描述
$config['website_setting']['web_keywords'] = ''; //网站关键词
$config['website_setting']['footer_name'] = ''; //页尾名
$config['website_setting']['affiliate_gold_perip'] = 1000; //每个IP获得元宝数
$config['website_setting']['email_encrypt_key'] = "test_encrypt"; //电邮连结加密 key
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
| 电邮设定
| -------------------------------------------------------------------
*/
/* End of file vars.php */
/* Location: ./application/config/vars.php */