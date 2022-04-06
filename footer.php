
	<?php 
	//wp_nav_menu(
		//array(
		//	'theme_location' => 'footer-menu',
		//	'menu_class' => 'footer-bar'
		//)
	//);
	?>
	</div>
<footer class="footer">
  <div class="footerhalf footerhalf-1">
        <h2 class="footerbig-title">Taste Our Coffee</h2>   
    <a href="http://localhost/cmsproject/shop/" class="btnfooter">Browse Our Shop</a>



	<div class="sect blog sectgrey">
  <div class="container">
    <div class="row rowcenter">
      <div class="col-md-5 col-sm-6 col--inbl">
        <h1 class="footerbig-title">Latest blog</h1>
  
        <?php if( is_active_sidebar('blog-sidebar'));?>

<?php dynamic_sidebar('blog-sidebar');?>
      </div>
    </div>
                             
    </div>

</div>
<?php get_search_form();?>
	<p class="small"><small>This is a ssignment done by Tanya P 2022 © All rights reserved</small></p>

  </div>
  <div class="footerhalf footerhalf-2">
    <h2 class="footerbig-title">CONTACT</h2>
    <h3 class="footertitle">Phone</h3>
    <p class="footerdesc">+1(000) 000 0000</p>
    <h3 class="footertitle">Mail</h3>
    <p class="footerdesc">coffee@mail.com</p>
    <h3 class="footertitle">Address</h3>
    <p class="footerdesc">Barrie ,ON<br>
Canada
    </p>
    <div class="d-flex flex-row">
  <div class="p-2"><i class="fa-brands fa-facebook"></i></div>
  <div class="p-2"><i class="fa-brands fa-instagram"></i></div>
  <div class="p-2"><i class="fa-brands fa-pinterest"></i></div>
</div>  </div>
</footer>
<?php wp_footer();?>


</body>
</html>