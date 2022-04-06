<?php
/*
Template Name: Shop Page
*/

 get_header();?>
<div class="headabout">
<div class="text-box">
		<h1 class="heading-primary">
			<span class="heading-primary-main">Coffee House</span>
      <br/>
			<span class="heading-primary-sub"><?php the_title();?></span>
		</h1>
		<a href="http://localhost/cmsproject/shop/" class=" btnfooter">Rediscover Coffee</a>
	</div>
</div>



</div>

<div class="content">
<div class="container">
<div class="row">

<div class="col-12">

<?php if(have_posts()) : while(have_posts()) : the_post();?>

<?php the_content();?>

<?php endwhile; else: endif;?>

</div>
</div>
</div>

</div>

            




<?php get_footer();?>