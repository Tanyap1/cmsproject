<?php get_header();?>
<div class="headabout">
<div class="text-box">
		<h1 class="heading-primary">
			<span class="heading-primary-main">Coffee House</span>
      <br/>
		</h1>
		<a href="http://localhost/cmsproject/shop/" class=" btnfooter">Rediscover Coffee</a>
	</div>
</div>



</div>

<section class= "page-wrap">

<div class="container">
<section class="row">

<div class="col-lg-3">

<?php ( is_active_sidebar('page-sidebar'));?>

<?php dynamic_sidebar('page-sidebar');?>
<?php get_search_form();?>

</div>

<div class="col-lg-9">
    <h1><?php echo single_cat_title();?></h1>

<?php get_template_part('includes/section', 'archive');?>
<?php previous_posts_link();?>
<?php next_posts_link();?>
</div>


</div>


</seection>




<?php get_footer();?>