<?php
 include 'form.php';
 
 function save() {
  adminForm();
 } 

 function gd_ip_config() {
                  //Judul Menu                              Nama Menu                        Nama Param
  add_options_page('Show Visitor IP Address Plugin Configuration', 'Show Visitor IP Address', 1, 'gd_ip_config', 'save');
 } 

 add_action('admin_menu', 'gd_ip_config');
?>
