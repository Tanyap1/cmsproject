<?php
/* 
Template Name: Contact-page Template
*/
?>

<?php get_header();?>
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
<div class="container-fluid contact" class="contact">
  <div class="container">

<?php get_template_part('includes/form','enquiry');?>


  </div>
</div>

<div>
  

</div>
<br/>
<div class="sect sectgreat">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-7 col-sm-offset-4 col-md-offset-6">
        <div class="description">
      <h2 class="descriptiontitle1">GREAT COFFEE</h2>
      <p class="descriptionp1">Lorem ipsum dolor sit amet, consectetur adipiscing elit
        <br/>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.      </div>
      </div>
    </div>
  </div>
</div>
<div class="sorts">

<?php get_template_part('includes/latest', 'coffees');?>


</div>

<?php get_footer();?>