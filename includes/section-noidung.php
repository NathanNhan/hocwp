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


