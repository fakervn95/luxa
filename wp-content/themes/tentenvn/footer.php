
<?php if(!is_product_category()) { ?>
<footer class="footer">
	<div class="container">
	   <div class="row">
        <?php if(is_active_sidebar('footer1')) {?>
            <div class="footer-widget-area col-sm-4">
              <?php dynamic_sidebar('footer1'); ?>
            </div>
          <?php } ?>  
     
          <?php if(is_active_sidebar('footer2')) :?>
            <div class="footer-widget-area col-sm-4">
              <?php dynamic_sidebar('footer2'); ?>
            </div>
        <?php endif ?> 
          <?php if(is_active_sidebar('footer3')) :?>
            <div class="footer-widget-area col-sm-4 ">
              <?php dynamic_sidebar('footer3'); ?>
            </div>
        <?php endif ?> 

      </div>
	</div>
</footer>

<div class="scrolltop">
  <i class="fa fa-angle-up" aria-hidden="true"></i> 
</div>
<?php }?>

<?php wp_footer(); ?>


</body>
</html>