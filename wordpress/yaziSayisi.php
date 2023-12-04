<?php 
	$args = array( 
	'post_type' => 'business',
	'category' => 140, 
	'post_status' => 'publish', 
); 

$query = new WP_Query( $args ); 
$count = $query->found_posts; 

echo $count; 
  ?>
