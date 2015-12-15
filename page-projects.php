<?php get_header();
/*
Template Name: Projects
*/
?>


<?php if(have_posts()): while (have_posts()) : the_post();?>
	
		<div class="col-xs-12 col-md-6 postbox ">
		
		<div class="img-responsive">
			<?php the_post_thumbnail();?>
		</div>	
	
			<div class="textbox" style="background-color:<?php the_field('post_hover_bg_color', 'options');?>" >
				<p class="text overtext"><a style="font-size:40px;" href="<?php the_permalink()?>" class="text"><?php the_title();?></a><br>
					<?php the_category( ' ' ); ?>
				</p>
			</div>
		</div>
		</div>
<?php endwhile; endif; ?>





<?php get_footer(); ?>