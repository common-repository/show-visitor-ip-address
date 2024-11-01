<?php
 // Show Admin Form
 function adminForm() {    
  echo '<div class="wrap">';
  echo '<h2>Show Visitor IP Address Plugins</h2>';

  if ($_REQUEST['submit']) {
   saveForm(); 
  }
  
  showForm();
 }

 // Save Configuration
 function saveForm() {  
  if (($_REQUEST['gd_ip_conf']) && ($_REQUEST['gd_ip_format']) && ($_REQUEST['gd_ip_widget'])) {
   update_option('gd_ip_conf', $_REQUEST['gd_ip_conf']);
   update_option('gd_ip_format', $_REQUEST['gd_ip_format']); 
   update_option('gd_ip_widget', $_REQUEST['gd_ip_widget']);
  }
 }
 
 // Show Configuration Form
 function showForm() {
  $default = get_option('gd_ip_conf');	 
  $format = get_option('gd_ip_format');
  $widget = get_option('gd_ip_widget');
	
  if ($default == '') {
   $default = 'Your IP Address is: ';
  }
  
  echo '<br />';
  echo '<form method="post">';
  echo '<label for="gd_ip_conf">Text To Use: ';
  echo '<input type="text" name="gd_ip_conf" value="' . $default . '">';
  echo '</label><br /><br />';

  if (($format == '') || ($format == 'normal')) {
   echo '<label for="gd_ip_format">Text Format: <br />';
   echo '<input type="radio" name="gd_ip_format" value="bold">Bold<br />';
   echo '<input type="radio" name="gd_ip_format" value="italic">Italic<br />';
   echo '<input type="radio" name="gd_ip_format" value="normal" checked>Normal<br />';	 
   echo '</label><br />';
  }
  if ($format == 'bold') {
   echo '<label for="gd_ip_format">Text Format: <br />';
   echo '<input type="radio" name="gd_ip_format" value="bold" checked>Bold<br />';
   echo '<input type="radio" name="gd_ip_format" value="italic">Italic<br />';
   echo '<input type="radio" name="gd_ip_format" value="normal">Normal<br />';	 
   echo '</label><br />';	  
  }
  if ($format == 'italic') {
   echo '<label for="gd_ip_format">Text Format: <br />';
   echo '<input type="radio" name="gd_ip_format" value="bold">Bold<br />';
   echo '<input type="radio" name="gd_ip_format" value="italic" checked>Italic<br />';
   echo '<input type="radio" name="gd_ip_format" value="normal">Normal<br />';	 
   echo '</label><br />';	  
  }
  
  if (($widget == '') || ($widget == 'single')) {
   echo '<label for="gd_ip_widget">Position: <br />';
   echo '<input type="radio" name="gd_ip_widget" value="single" checked>At Single Post<br />';
   echo '<input type="radio" name="gd_ip_widget" value="widget">As Widget<br />';
   echo '</label><br />';
  }
  if ($widget == 'widget') { 
   echo '<label for="gd_ip_widget">Position: <br />';
   echo '<input type="radio" name="gd_ip_widget" value="single">At Single Post<br />';
   echo '<input type="radio" name="gd_ip_widget" value="widget" checked>As Widget<br />';
   echo '</label><br />';  
  }

  echo '<input type="submit" name="submit" value="Submit">'; 
  echo '</form>';
  echo '</div>';
 } 
?>
