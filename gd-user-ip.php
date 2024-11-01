<?php
/*
Plugin Name: Show Visitor IP Address
Plugin URI: http://gadjah.net/2008/06/11/wordpress-show-visitor-ip-address-plugin/
Description: Show visitor IP Address and linked it to http://whois.domaintools.com, everytime they click at the link they will be redirected to see where they come from and which ISP has the IP Address
Version: 0.2
Author: Irfan Ardiansah
Author URI: http://gadjah.net/category/wordpress/
*/

include 'conf.php';

function getAddress($content) {
 if (is_single()) { 
  $show = get_option('gd_ip_conf');
  $textFormat = get_option('gd_ip_format');  
  
  $fText1 = '';
  $fText2 = '';

  if ($show == ''){
   $show = 'Your IP Address is: ';
  }
  if ($textFormat == 'bold'){
	  $fText1 = '<b>';
	  $fText2 = '</b>';
  }
  elseif ($textFormat == 'italic'){
	  $fText1 = '<i>';
	  $fText2 = '</i>';
  }
  
  $ref = $_SERVER['REMOTE_ADDR']; 
  $ref = '<a href="http://whois.domaintools.com/' . $ref  . '" target="_blank">' . $ref . '</a>';
  $ref = $fText1 . $show . $fText2 . '<br />' . $ref;
  $content = $content . '<p>' . $ref . '</p>';
 }
 return $content;
}

function ip_widget($args) {
  extract($args);
  $title = get_option('gd_ip_conf');
  echo $before_widget . $before_title . $title . $after_title;

  $ref = $_SERVER['REMOTE_ADDR']; 
  $ref = '<ul><li><a href="http://whois.domaintools.com/' . $ref  . '" target="_blank">' . $ref . '</a></li></ul>';
  echo $ref;
  echo $after_widget;
}

function ip_init() {
 register_sidebar_widget('Visitor IP Address', 'ip_widget');
}

$pos = get_option('gd_ip_widget');

if (($pos == '') || ($pos == 'single')) {
 add_filter('the_content', 'getAddress');
}
if ($pos == 'widget') {
 add_action('plugins_loaded', 'ip_init');
}
?>
