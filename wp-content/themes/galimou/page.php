<?php
/*
Template Name: No Sidebar
*/
?>
<?php get_header('v2');?>


<div class='content'>
		<div class='container'>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
<p><?php the_content(); ?></p>
<?php endwhile; else : ?>
<p><?php _e( 'Sorry No Pages Found.');?></p>
<?php endif; ?>
              </div>
    </div>

<?php get_footer();?>
