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
/*
| -------------------------------------------------------------------
| 电邮设定
| -------------------------------------------------------------------
*/
$config['email_setting']['protocol'] = 'smtp'; //邮件发送协议 mail, sendmail, or smtp  默认值: mail
//$config['email_setting']['mailpath'] = '/usr/sbin/sendmail'; //服务器上 Sendmail 的实际路径。protocol 为 sendmail 时使用。
$config['email_setting']['smtp_host'] = 'smtp.163.com'; //SMTP 服务器地址
$config['email_setting']['smtp_user'] = '18063912121@163.com'; //SMTP 用户账号
$config['email_setting']['smtp_pass'] = '430048'; //SMTP 密码
$config['email_setting']['smtp_port'] = '25'; //SMTP 端口  默认值: 25
$config['email_setting']['smtp_timeout'] = '5'; //SMTP 超时设置(单位：秒)  默认值: 5
$config['email_setting']['wordwrap'] = TRUE; //开启自动换行  默认值: true
$config['email_setting']['wrapchars'] = '76'; //自动换行时每行的最大字符数  默认值: 76
$config['email_setting']['mailtype'] = 'html'; //邮件类型 text 或 html  默认值: text
$config['email_setting']['charset'] = 'utf-8'; //字符集  默认值: utf-8
$config['email_setting']['validate'] = 'FALSE'; //是否验证邮件地址 TRUE 或 FALSE (布尔值)  默认值: false
$config['email_setting']['priority'] = '3'; //Email 优先级 1到5  1 = 最高. 5 = 最低. 3 = 正常  默认值: 3
//$config['email_setting']['crlf'] = '\r\n'; //换行符 '\r\n' or '\n' or '\r' (使用 '\r\n' to 以遵守RFC 822)  默认值: \n
//$config['email_setting']['newline'] = '\r\n'; //换行符 '\r\n' or '\n' or '\r' (使用 '\r\n' to 以遵守RFC 822)  默认值: \n
$config['email_setting']['bcc_batch_mode'] = FALSE; //启用批量暗送模式 TRUE 或 FALSE (布尔值)  默认值: false
$config['email_setting']['bcc_batch_size'] = '200'; //批量暗送的邮件数  默认值: 200
