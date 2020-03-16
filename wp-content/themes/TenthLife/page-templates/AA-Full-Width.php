<?php
/**
* Template Name: AA-Full Width
* Description: DELT Homepage
*
* @package WordPress
* @subpackage BootstrapWP
*/
get_header(); ?>
<?php while ( have_posts() ) : the_post (); ?>
<div class="container in">
	<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
