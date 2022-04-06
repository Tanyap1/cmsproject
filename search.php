<?php get_header();?>

<section class= "page-wrap">

<div class="container">
<section class="row">


<div class="col-lg-9">
    <h1>Search Result <?php get_search_query();?></h1>

<?php get_template_part('includes/section', 'archive');?>
<?php previous_posts_link();?>
<?php next_posts_link();?>
</div>


</div>

<section>



<?php get_footer();?>