<?php
/**
 * Left sidebar column for the blog and pages. 
 * @package Influential
 */


if (   ! is_active_sidebar( 'pageleft'  )
	&& ! is_active_sidebar( 'blogleft' ) 
	)
	return;

if ( is_page() ) {
	
	echo '<aside id="left-sidebar" class="widget-area" role="complementary">';    
	dynamic_sidebar( 'pageleft' );
	echo '</aside>';
	
} else {
	
	echo '<aside id="left-sidebar" class="widget-area" role="complementary">';   
	dynamic_sidebar( 'blogleft' );
	echo '</aside>';
	
}
?>