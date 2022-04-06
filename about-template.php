<?php
/* 
Template Name: About Page Template
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



</div>

<div class="content-container">
  <div class="site-title">
    <h1>The Best Coffee to Discover</h1>
    <div class="d-flex flex-row">
  <div class="p-2"><i class="fa-brands fa-facebook"></i></div>
  <div class="p-2"><i class="fa-brands fa-instagram"></i></div>
  <div class="p-2"><i class="fa-brands fa-pinterest"></i></div>
</div>    
   
  </div>
  <div class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget nulla mollis, efficitur urna nec, viverra dolor. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent efficitur finibus eros sit amet sagittis. Ut sollicitudin sodales neque et volutpat. Curabitur dictum ante vel fermentum volutpat. Curabitur ac neque et erat viverra egestas.</p>
  </div>
  <div class="aboutimg">

  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt-_ua8uug6IA-MBtArp7Dar0976Ot9ZLtVg&usqp=CAU" alt="" class="" />
  <img src="images/1-1.jpg" alt="" class="" />

</div>
</div>
<div class="video">

<iframe width="420" height="315"
src="https://www.youtube.com/embed/ZZYgp_mr6Ks?autoplay=1&mute=1&loop=1&">
</iframe>
</div>
<div class="sect sectbest sectcenter">
  <div class="container">
    <div class="row rowcenter">
      <div class="col-md-6 col-sm-7 col-xs-12">
        <h1 class="secttitle bestbottom">The best coffee shop</h1>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-4">
            <img src="https://image.ibb.co/n5gUtm/icon_1.png" class="bestimg">
            <h2 class="besttitle">Best beans</h2>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <img src="https://image.ibb.co/dwEXDm/icon_2.png" class="bestimg">
            <h2 class="besttitle">Best beans</h2>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <img src="https://image.ibb.co/j5Og66/icon_3.png" class="bestimg">
            <h2 class="besttitle">Best beans</h2>
          </div>
        </div>
        
      <p class="sectsubtitle bestmargin sectwhite-text ">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.      </p>
        <a href="#" class=" btnfooter">About us</a>
      </div>
    </div>
</div>
  </div>


  <div class="sect blog sect--grey">
  <div class="container">
    <div class="row row--center">
      <div class="col-md-5 col-sm-6 col--inbl">
        <h1 class="sect__title">Latest Products</h1>
        <p class="sect__subtitle">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.      </p>
      </div>
    </div>
    <div class="row last-articles">
      <div class="col-md-4 col-sm-4">
        <div class="article-pre article-pre-1">
             <div class="article-pre__img">
             </div>
          <div class="article-pre__info">
          <h1 class="article-pre__title">
3 Box Gift Set          </h1>
<span class="article-pre__date">$55</span>

          <p class="article-pre__ex">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.          </p>
          <a href="http://localhost/cmsproject/product/the-great-gift-set/">Buy Now <i class="fa-solid fa-arrow-right"></i></a>

        </div>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-4">
        <div class="article-pre article-pre-2">
             <div class="article-pre__img">
             </div>
          <div class="article-pre__info">
          <h1 class="article-pre__title">
Gift Box of 5 Nesspresso Mix          </h1>
<span class="article-pre__date">$60</span>

          <p class="article-pre__ex">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.          </p>
          <a href="http://localhost/cmsproject/product/199/">Buy Now <i class="fa-solid fa-arrow-right"></i></a>

        </div>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-4">
        <div class="article-pre article-pre-3">
             <div class="article-pre__img">
             </div>
          <div class="article-pre__info">
          <h1 class="article-pre__title">
Turkish New Blend          </h1>
<span class="article-pre__date">$20</span>

          <p class="article-pre__ex">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <a href="http://localhost/cmsproject/product/turkish-capsules/">Buy Now <i class="fa-solid fa-arrow-right"></i></a>

        </div>
        </div>
      </div>                                   
    </div>
</div>

<div class="contacts">
<div class="container-fluid contact" class="contact">
  <div class="container">
  <?php get_template_part('includes/form','enquiry');?>

  </div>
</div>

</div>


<?php get_footer();?>