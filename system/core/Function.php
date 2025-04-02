<?php
function xss($data) {
	$data = str_replace(array('&amp;', '&lt;', '&gt;'), array('&amp;amp;', '&amp;lt;', '&amp;gt;'), $data);
	$data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
	$data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
	$data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');
	$data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);
	$data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
	$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
	$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);
	$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
	$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
	$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);
	$data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);
	do {
		$old_data = $data;
		$data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
	} while ($old_data !== $data);
	return $data;
}
function generateKey() {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $key = '';
    for ($i = 0; $i < 16; $i++) {
        $key .= $characters[rand(0, strlen($characters) - 1)];
        if (($i + 1) % 4 == 0 && $i != 15) {
            $key .= '-';
        }
    }
    return $key;
}
function valid_str_data($data) {
	if (preg_match('/^\w{6,32}$/', $data)) {
		return true;
	} else {
		return false;
	}
}
function enPassword($password){
	return password_hash($password, PASSWORD_DEFAULT);
}
function dePassword($password,$passwordEn){
   return password_verify($password,$passwordEn);
}
function randStr($length,$text="abcdefghijklmnopqrstuvwxyz0123456789"){
	return substr(str_shuffle(str_repeat($x=$text, ceil($length/strlen($x)) )),1,$length);
}  
function random($string, $length)
{
    $chars = $string;  
    $data = substr(str_shuffle($chars), 0, $length);
    return $data;
}
function href($url = null) {
	return header("location: ".$url);
}
function checkFB($fb_id){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://graph.facebook.com/'.$fb_id.'/picture?redirect=false');
	curl_setopt($curl, CURLOPT_HEADER, FALSE);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($curl);
	$status = json_decode($data, true);
	if($status['data']['width']){
		  $arr = 'true';
	}else{
		  $arr = 'false';
	}
	return $arr;
}
function log_text($file,$txt)
{
	$myfile = fopen($file, "a");
	fwrite($myfile, $txt);
	fclose($myfile);
}
function get_IP_address()
{
	$ipaddress = '';
      if (getenv('HTTP_CLIENT_IP'))
          $ipaddress = getenv('HTTP_CLIENT_IP');
      else if(getenv('HTTP_X_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
      else if(getenv('HTTP_X_FORWARDED'))
          $ipaddress = getenv('HTTP_X_FORWARDED');
      else if(getenv('HTTP_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_FORWARDED_FOR');
      else if(getenv('HTTP_FORWARDED'))
          $ipaddress = getenv('HTTP_FORWARDED');
      else if(getenv('REMOTE_ADDR'))
          $ipaddress = getenv('REMOTE_ADDR');
      else
          $ipaddress = 'UNKNOWN';

      return $ipaddress;
}
function ip_address()
{
$ip = $_SERVER['REMOTE_ADDR'];
if (!empty($_SERVER['WWW_HTTP_CLIENT_IP']))
{
    $ip = $_SERVER['WWW_HTTP_CLIENT_IP'];
} else if
(!empty($_SERVER['WWW_HTTP_X_FORWARDED_FOR'])){
    $ip =
    $_SERVER['WWW_HTTP_X-FORWARDED_FOR'];
}
return $ip;
}
function getRandomUserAgent() {
	$userAgents = array(
		'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
		'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36',
		'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36',
		'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134'
	);
	return $userAgents[array_rand($userAgents)];
}
function cURL($url, $cookie = null, $data = null,$header = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TCP_NODELAY, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, getRandomUserAgent());
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	if ($cookie) {
		curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	}
	if ($data) {
		curl_setopt($ch, CURLOPT_POST, count($data));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	}
	if ($header) {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	}
	$kq = curl_exec($ch);
	curl_close($ch);
	return $kq;
}
function getEmail($email){
    $valid = preg_match('/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/i', $email, $m);
    if (array_key_exists("0",$m)){
        return($m[0]);
    }else{
        return false;
    }
}
function auto($url){
    $curl = curl_init();
    $headers = array();
    $headers[] = 'Content-Type: application/json; charset=utf-8';
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $ch = curl_exec($curl);
    curl_close($curl);
    return $ch;
}
?>