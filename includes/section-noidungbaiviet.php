<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
        ?>
           <?php if(has_post_thumbnail()) {
              ?>
              <div class="text-center mb-3">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">

              </div>
              <?php
           } ?>
           <h4 class="title"><?php the_title(); ?></h4>
           <?= get_the_date('d/m/Y h:i:s'); ?> 
           <p class="content"><?php the_content();  ?></p>
           <p>Bài viết được tạo bởi <?= get_the_author_meta("first_name") ?> - <?= get_the_author_meta("last_name"); ?></p>
        <?php
       
        //
    } // end while
    $tags = get_the_tags();
    if($tags) {
        foreach($tags as $tag) {
            ?>
               <a class="btn btn-info " href="<?= get_tag_link($tag->term_id) ?>">
                  <?= $tag->name; ?>
               </a> 
            <?php
        }
    }

    //Lấy tất cả các chuyên mục của bài viết 
    $categories = get_the_category();
    foreach($categories as $cat) {
        ?>
            <a class="btn btn-link" href="<?= get_category_link($cat->term_id) ?>">
               <?= $cat->name; ?>
            </a>

        <?php
    }
} // end if



