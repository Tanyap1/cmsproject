<?php get_header();?>



<?php get_header();?>
<div class="headabout">
<div class="text-box">
		<h1 class="heading-primary">
			<span class="heading-primary-main">Coffee House</span>
      <br/>
			<span class="heading-primary-sub">Shop</span>
		</h1>
		<a href="http://localhost/cmsproject/shop/" class=" btnfooter">Rediscover Coffee</a>
	</div>
</div>
</div>


<div class="card">
    <div class="row justify-content-md-center coffeeshop">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h4 class="card-title2"></h4>
          <p class="card-text2">
          <?php woocommerce_content();?>
          

        </div>
      </div>
</div>
</div>

<div class="video">

<iframe width="420" height="315"
src="https://www.youtube.com/embed/ZZYgp_mr6Ks?autoplay=1&mute=1&loop=1&">
</iframe>
</div>

<div class="halfsect">
  <div class="half halfsectfirst">
    <div class="description">
      <h2 class="descriptiontitle">FRESH BEANS</h2>

      <p class="descriptionp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <?php get_template_part('includes/latest', 'coffees');?>

      <a href="http://localhost/cmsproject/coffees/" class="btnfooter">Learn more</a>
    </div>
    <br/>

  </div>
    <div class="half contact "> 
    <div class="container-fluid contact" class="contacts">
  <div class="container">
  <?php get_template_part('includes/form','enquiry');?>

  </div>
</div>

</div>
</div>

<?php get_footer();?>