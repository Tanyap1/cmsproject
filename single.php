<?php get_header();?>
<div class="headabout">
<div class="text-box">
		<h1 class="heading-primary">
			<span class="heading-primary-main">Coffee House</span>
      <br/>
			<span class="heading-primary-sub"><?php the_title();?></span>
		</h1>
		<a href="#" class=" btnfooter">Rediscover Coffee</a>
	</div>
</div>



</div>

<section class= "page-wrap">

<div class="container">
  
<?php;?>
    <h1><?php the_title();?></h1>  
    <?php (has_post_thumbnail());?>
    <img src="<?php the_post_thumbnail_url('');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail ">

<?php get_template_part('includes/section', 'blogcontent');?>

<?php wp_link_pages();?>

</div>

<section>

<?php get_footer();?>