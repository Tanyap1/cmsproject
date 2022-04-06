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

<section class= "page-wrap ">

<div class="container ">




<div class ="col-lg-6">

<div class="card justify-content-md-center" style="width: 60rem;"> 
   <h3 class="card-title"> <?php the_title();?>
</h3>
  <div class="card-body">
  <?php (has_post_thumbnail());?>
    <img src="<?php the_post_thumbnail_url('');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail ">

  


    <p class="card-text"> <?php get_template_part('includes/section', 'coffee');?>

</p>
<ul>
    <li>Origin Country: <?php echo get_post_meta($post->ID, 'Origin Country',  true);?></li>
    <li>Price: <?php echo get_post_meta($post->ID, 'Price',  true);?></li>

</ul>




<?php wp_link_pages();?> 
    <a href="http://localhost/cmsproject/shop/" class="btn btn-primary">Shop</a>
  </div>
</div>

</div>





<?php get_footer();?>