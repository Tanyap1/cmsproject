<?php if(have_posts() ): while(have_posts() ): the_post();?>
<?php echo get_the_date();?>

<p> Posted by <?php echo $fname;?></p>
  <?php the_content();?>


<?php 
$fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
?>

<?php 
$categories = get_the_category();
foreach($categories as $cat):?>
<a href="<?php echo get_category_link($cat->term_id);?>">
<?php echo $cat->name;?>
</a>
<?php endforeach;?>

<?php endwhile; else: endif;?>

<?php
//$tags = get_the_tags();
//if($tags):
  //foreach($tags as $tag):?>
<!-- <a href ="<php echo get_tag_link($tag->term_id);?>" class="badge adge-success">-->
<?php

$tags = get_the_tags();
foreach($tags as $tag):?>
<a href="<?php echo get_tag_link($tag->term_id);?>" class="tags">
<?php echo $tag->name;?>
</a>
<?php endforeach;?>
 