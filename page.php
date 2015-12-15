<?php get_header(); ?>



<div class="home-wallpaper mainimage">
	<img src="<?php the_field('home_wallpaper');?>" alt="" class="img-responsive " >
</div>

<div class="col-xs-12 welcomebox ">
		<h1 class="verticalLine"><?php the_field('welcome_title');?></h1>
		<p id="posttype">this  is my website</p>
</div>




<?php get_footer(); ?>