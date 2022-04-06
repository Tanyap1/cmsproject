<?php 

$args = [
'post_type' =>'coffees',
];
$query = new WP_Query($args);
?>

<?php if($query->have_posts()):?>

    <?php while ($query->have_posts()) : $query->the_post();?>


<div class="col-md-3" style="float:left">
        <div class="card mb-4">
          <?php (has_post_thumbnail());?>
    <img class="card-img-top" src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-4 img-thumbnail ">

          <div class="card-body1">
            <h4 class="card-title"><?php the_title();?></h4>
           
            <a href="http://localhost/cmsproject/coffees/" class="btn">Learn More<i class="fa-solid fa-arrow-right"></i> </a>
          </div>
        </div>
      </div>







      
      
    <?php endwhile;?>
        <?php endif;?>