<?php

$folder = '/functions';
$roots_includes = ['/menus.php', '/themesupport.php', '/register-styles.php', '/register-scripts.php', '/wp-images.php'];

foreach ($roots_includes as $file) {
    $value = $folder . $file;
    if (!$filepath = locate_template($value)) {
      trigger_error("Error locating $value for inclusion!", E_USER_ERROR);
    }
  
    require_once $filepath;
  }
  unset($value, $filepath);