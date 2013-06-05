<?

function des3crypt($str,$type = "ENCODE",$key = "AXNU7SLKJ7HKJm+x4bfBJSJQKde"){
	if(empty($str) && $str != 0){
		return false;
	}
	$td = mcrypt_module_open( MCRYPT_3DES, '', MCRYPT_MODE_ECB, '');
	$key = base64_decode($key);
	mcrypt_generic_init($td, $key,'12345678');
if(strtoupper($type) == ‘ENCODE’){
$str = padding( $str );
$data = mcrypt_generic($td, $str);
}elseif(strtoupper($type) == ‘DECODE’){
$str = base64_decode($str);
$data = mdecrypt_generic($td, $str);
}
//加密
mcrypt_generic_deinit($td);
//&#32467;束
mcrypt_module_close($td);
if(strtoupper($type) == ‘ENCODE’){
$data = removeBR(base64_encode($data));
}elseif(strtoupper($type) == ‘DECODE’){
$data = removePadding($data);
}
return $data;
}
//&#21024;除填充符
function removePadding( $str ){
$len = strlen( $str );
$newstr = “”;
$str = str_split($str);
for ($i = 0; $i < $len; $i++ ){
if (!in_array($str[$i],array(chr(0),chr(1),chr(2),chr(3),chr(4),chr(5),chr(6),chr(7),chr(8)))){
$newstr .= $str[$i];
}
}
return $newstr;
}
//填充密&#30721;，填充至8的倍&#25968;,pkcs7 | pkcs5
function padding( $str ,$pkcs = 5){
if($pkcs == 5){
$pad = 8 – (strlen($str) % 8);
$str .= str_repeat(chr($pad), $pad);
}elseif($pkcs == 7){
$len = 8 – strlen( $str ) % 8;
for ( $i = 0; $i < $len; $i++ ){
$str .= chr( 0 );
}
}
return $str ;
}
/**
* http://52blogger.com &#40857;哥博客版&#26435;所有,&#27426;迎&#36716;&#36733;,&#36716;&#36733;&#35831;&#21153;必注明&#26469;源,&#36829;版必究.
*/
//&#21024;除回&#36710;和&#25442;行
function removeBR( $str ){
$len = strlen( $str );
$newstr = “”;
$str = str_split($str);
for ($i = 0; $i < $len; $i++ ){
if ($str[$i] != ‘\n’ and $str[$i] != ‘\r’){
$newstr .= $str[$i];
}
}
return $newstr;
}