<?php
session_start();
header('Cache-control: private'); // IE 6 FIX
 
if(isset($_GET['lang'])) {
	$lang = $_GET['lang'];
	 
	// register the session and set the cookie
	$_SESSION['lang'] = $lang;
	 
	setcookie('lang', $lang, time() + (3600 * 24 * 30));
} else if(isset($_SESSION['lang'])) {
	$lang = $_SESSION['lang'];
} else if(isset($_COOKIE['lang'])) {
	$lang = $_COOKIE['lang'];
} else {
	$lang = 'ua';
}
 
switch ($lang) {
  case 'en':
  $lang_file = 'en.php';
  $en = 'lang-active';
  $ua = '';
  $ru = '';
  break;
 
  case 'ua':
  $lang_file = 'ua.php';
  $ua = 'lang-active';
  $ru = '';
  $en = '';
  break;
 
  case 'ru':
  $lang_file = 'ru.php';
  $ru = 'lang-active';
  $ua = '';
  $en = '';
  break;
 
  default:
  $lang_file = 'ua.php';
  $ua = 'lang-active';
  $ru = '';
  $en = '';
}

// getcwd() - повертаэ повний шлях для поточнго каталогу
require_once getcwd().'/sys/plugins/languages/'.$lang_file;
?>