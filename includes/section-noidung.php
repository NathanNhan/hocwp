<?php

//Hiển thị sidebar widget
echo "<div class='row'>";
echo "<div class='col col-3'>";
 if (is_active_sidebar('my-widget')): ?>
  
	<ul id="sidebar">
		<?php dynamic_sidebar('my-widget');?>
	</ul>
<?php endif;
echo "</div>";

echo "<div class='col col-9'>";
echo get_search_form(); 
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
        
        the_title();
        // Post Content here
        the_content();
        //
    } // end while
} // end if
echo "</div>";

echo "</div>";

?>
  <div class="row">
      <div class="col col-6">
          <p><?php echo get_field('trang_chu') ?></p>
      </div>
  
  
      <div class="col col-6">
          <?php 
          // var_dump(get_field('hinh_anh'));
          // return false;
          if(get_field('hinh_anh')) {
              ?>
                  <img src="<?php echo get_field('hinh_anh')['url'] ?>" alt="" srcset="">
  
              <?php
          }
  
          ?>
  
          
      </div>

  </div>



<?php


