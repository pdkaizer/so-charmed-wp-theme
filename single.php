<?php
  $post = $wp_query->post;
  if (in_category('sold')) {
      include(TEMPLATEPATH.'/single-sold.php');
  } 
  else{
      include(TEMPLATEPATH.'/single-default.php');
  }
?>
