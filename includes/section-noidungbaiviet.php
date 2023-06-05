<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
        ?>
           <h4 class="title"><?php the_title(); ?></h4>
           <p class="content"><?php the_content();  ?></p>
        <?php
       
        //
    } // end while
} // end if



