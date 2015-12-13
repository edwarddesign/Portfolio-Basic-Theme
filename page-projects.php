<?php get_header();
/*
Template Name: Projects
*/
?>





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	
<div class="container">
	<h1><?php the_title(); ?></h1>
 	<p><?php the_content(); ?></p> 
</div>

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>