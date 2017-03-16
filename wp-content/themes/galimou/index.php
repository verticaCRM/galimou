<?php get_header('v2');?>

<?php get_sidebar('page'); ?>

<div class='content'>
		<div class='container'>
test blo AVIVA g
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<p><?php the_content(); ?></p>
<?php endwhile; else : ?>
<p><?php _e( 'Sorry No Pages Found.');?></p>
<?php endif; ?>
              </div>
    </div>

<?php get_footer();?>
