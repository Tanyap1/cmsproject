<?php get_header();?>


<img src="<?php the_post_thumbnail_url('post-img');?>" class="img-fluid mb-5">

<div class="content">
<div class="container">

             <?php if(have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content();?>

    <?php endwhile; else: endif;?>
</div>


</div>




<?php get_footer();?>