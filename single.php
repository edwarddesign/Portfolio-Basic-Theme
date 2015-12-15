<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

	<div class="col-xs-12 postmainimage img-responsive">
		<div class="col-xs-12 titlebox">
				<div class="line-title"></div>
				<h1><?php the_title(); ?></h1>
				<p id="posttype"><?php the_field('location');?></p>
		</div>
		<div class="col-xs-12 postcontent img-responsive">
			<?php the_content();?>
		</div>
	</div>




<!--this is the short subject box-->


	<div class="col-xs-12 shortsubjectbox" >
		<div id="parallelogram" style="background-color:<?php the_field('post_hover_bg_color', 'options');?>"></div>
		<div class="oversubject">
			<div class="col-lg-3 straight-line">
				<svg height="300" width="500">
  					<line x1="200" y1="0" x2="200" y2="250" style="stroke:rgb(0,0,0);stroke-width:2" />
				</svg>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 shortsubject">
				<p><?php the_field('shortsubject');?></p>
			</div>
			<div class="col-lg-3 straight-line">
				<svg height="210" width="0">
  					<line x1="100" y1="0" x2="100" y2="100" style="stroke:rgb(0,0,0);stroke-width:2" />
				</svg>
			</div>
			
		</div>
	</div>

<!-- this is the end of the short subject box-->

	
<!-- this is the REPEATER FIELD PHP CODE AND STUFF-->

<div class="col-xs-12 col-lg-12 repeaterfield " align="center">
		<?php if( have_rows('repeaterimage') ): ?>
			       <?php while( have_rows('repeaterimage') ): the_row();                        
				  // vars
				  $image = get_sub_field('galleryimage');                          
				  ?>                                     
					<img class="img-responsive" src="<?php echo $image; ?>" alt=""/>                                              
				<?php endwhile; ?>                                                          
		<?php endif; ?>
</div>


<div class="col-xs-12 quotebox" style="background-color:<?php the_field('post_hover_bg_color', 'options');?>">
			<div class="col-lg-3 straight-line">
				<svg height="210" width="500">
  					<line x1="250" y1="0" x2="250" y2="250" style="stroke:rgb(255,255,255);stroke-width:2" />
				</svg>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 quote">
				<p><?php the_field('quote');?></p>
			</div>
			<div class="col-lg-3"></div>
			<div class="col-xs-12"></div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-1 quotecredit-line quotecredit">
					<svg height="110" width="300">
		  				<line x1="100" y1="0" x2="100" y2="75" style="stroke:rgb(255,255,255);stroke-width:2" />
					</svg>
				</div>
				<div class=" col-xs-12 col-lg-4" >
					<p id="quotecredit"><?php the_field('quotecredit');?></p>
					<p id="jobtitle"><?php the_field('jobtitle');?></p>
				</div>
			</div>

		
</div>


<!-- this is the REPEATER FIELD PHP CODE AND STUFF-->

<!-- this is the long subject box-->

<div class="col-xs-12 col-lg-12 col-md-12 objectivebox">
		<div id="parallelogram2" style="background-color:<?php the_field('post_hover_bg_color', 'options');?>"></div>
		<div class="col-xs-12 col-md-12 col-lg-12" style="z-index: 1;">
			<h1>OBJECTIVE</h1>
			<p id="objective" ><?php the_field('objective');?></p>
		</div>
			
</div>

<div class="col-xs-12 postlink " style="color:black; font-weight: bold; padding-left:40px; font-size:30px; text-align:center;">
	<p><?php previous_post_link();?><span style="visibility:hidden;">\\\\\\\\</span><?php next_post_link();?></p>

	
</div>






<!-- this is the end of the long subject box-->

<!-- this is the previous and next post box-->




<!-- this is the END OF previous and next post box-->

<?php get_footer(); ?>