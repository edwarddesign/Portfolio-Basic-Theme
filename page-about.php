<?php get_header();
/*
Template Name: About
*/
?>

<div class="box">
	<div class="parallax-image-wrapper parallax-image-wrapper-100" data-anchor-target="#top + .gap" data-bottom-top="transform:translate3d(0px, 200%, 0px)" data-top-bottom="transform:translate3d(0px, 0%, 0px)">
		<div class="parallax-image parallax-image-100"style="background-image:url(<?php the_field('top_image');?>)" data-anchor-target="#top + .gap" data-bottom-top="transform: translate3d(0px, -80%, 0px);" data-top-bottom="transform: translate3d(0px, 80%, 0px);"> 
		</div>
		<!--the +/-80% translation can be adjusted to control the speed difference of the image-->
	</div>

	<div id="skrollr-body">
		<div  id="top"></div>
		<div class="gap gap-100" style="background-image:url(<?php the_field('top_image');?>);"></div>
	</div>
</div>



<div class="col-xs-12 text-center" >
	<img src="<?php the_field('profile_image');?>" alt="" class=" profile img-responsive " >
</div>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <div class="container info">
		<h1><?php the_title(); ?></h1>
	 	<p><?php the_content(); ?></p> 
 	</div>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>





<div class="row-timeline">
	<div class="container">
	  <div class="page-header">
	    <h1 id="timeline" style="text-align: center;">Resume</h1>
	  </div>
	  <ul class="timeline">
	    <li>
	      <div class="timeline-badge primary"><i class="fa fa-graduation-cap"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('resume_title_1'); ?> </h4>
	          <h6 class="timeline-date"><i class="fa fa-calendar-o"></i> <?php the_field('resume_title_1_date'); ?> </h6>
	        </div>
	        <div class="timeline-body">
	           <ul class="description">
			     <p><?php the_field('resume_title_1_description'); ?></p> 
			    </ul>
	        </div>
	      </div>
	    </li>
	    <li class="timeline-inverted">
	      <div class="timeline-badge primary"><i class="fa fa-globe"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title-inverted "><?php the_field('resume_title_2'); ?> </h4>
	          <h6 class="timeline-date-inverted"><i class="fa fa-calendar-o"></i> <?php the_field('resume_title_2_date'); ?> </h6>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('resume_title_2_description'); ?> </p>
	        </div>
	      </div>
	    </li>
	    <li>
	      <div class="timeline-badge primary"><i class="glyphicon glyphicon-credit-card"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('resume_title_3'); ?></h4>
	          <h6 class="timeline-date"><i class="fa fa-calendar-o"></i> <?php the_field('resume_title_3_date'); ?> </h6>
	        </div>
	        <div class="timeline-body-right">
	          <p><?php the_field('resume_title_3_description'); ?> </p>
	        </div>
	      </div>
	    </li>

	    <li class="timeline-inverted">
	      <div class="timeline-badge primary"><i class="glyphicon glyphicon-thumbs-up"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title-inverted"><?php the_field('resume_title_4'); ?> </h4>
	           <h6 class="timeline-date-inverted"><i class="fa fa-calendar-o"></i> <?php the_field('resume_title_2_date'); ?> </h6>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('resume_title_4_description'); ?> </p>
	        </div>
	      </div>
	    </li>
	  </ul>
	</div>
</div>


<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});

</script>


 <div class="container skills" style="backgroun-color:#fefefe;">

<h1 style="text-align: center;">Skills</h1>

<div class="skillbar clearfix " data-percent="<?php the_field('skillbar_percentage_1'); ?>">
	<div class="skillbar-title" style="background-color:<?php the_field('skillbar_color_1'); ?>"><span><?php the_field('skillbar_title_1'); ?></span></div>
	<div class="skillbar-bar" style="background-color:<?php the_field('skillbar_color_1'); ?>"></div>
	<div class="skill-bar-percent"><?php the_field('skillbar_percentage_1'); ?></div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="<?php the_field('skillbar_percentage_2'); ?>">
	<div class="skillbar-title" style="background-color:<?php the_field('skillbar_color_2'); ?>"><span><?php the_field('skillbar_title_2'); ?></span></div>
	<div class="skillbar-bar" style="background-color:<?php the_field('skillbar_color_2'); ?>"></div>
	<div class="skill-bar-percent"><?php the_field('skillbar_percentage_2'); ?></div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="<?php the_field('skillbar_percentage_3'); ?>">
	<div class="skillbar-title" style="background:<?php the_field('skillbar_color_3'); ?>"><span><?php the_field('skillbar_title_3'); ?></span></div>
	<div class="skillbar-bar" style="background:<?php the_field('skillbar_color_3'); ?>"></div>
	<div class="skill-bar-percent"><?php the_field('skillbar_percentage_3'); ?></div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="<?php the_field('skillbar_percentage_4'); ?>">
	<div class="skillbar-title" style="background:<?php the_field('skillbar_color_4'); ?>"><span><?php the_field('skill_bar_title_4'); ?></span></div>
	<div class="skillbar-bar" style="background:<?php the_field('skillbar_color_4'); ?>"></div>
	<div class="skill-bar-percent"><?php the_field('skillbar_percentage_4'); ?></div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="<?php the_field('skillbar_percentage_5'); ?>">
	<div class="skillbar-title" style="background:<?php the_field('skillbar_color_5'); ?>"><span><?php the_field('skillbar_title_5'); ?></span></div>
	<div class="skillbar-bar" style="background:<?php the_field('skillbar_color_5'); ?>"></div>
	<div class="skill-bar-percent"><?php the_field('skillbar_percentage_5'); ?></div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="<?php the_field('skillbar_percentage_6'); ?>">
	<div class="skillbar-title" style="background:<?php the_field('skillbar_color_6'); ?>"><span><?php the_field('skillbar_title_6'); ?></span></div>
	<div class="skillbar-bar" style="background:<?php the_field('skillbar_color_6'); ?>"></div>
	<div class="skill-bar-percent"><?php the_field('skillbar_percentage_6'); ?></div>
</div> <!-- End Skill Bar -->

</div>





<?php get_footer(); ?>