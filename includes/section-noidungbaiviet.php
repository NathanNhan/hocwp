<?php
$next_str = '';
$taxonomy = '';
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
           <?php if (has_post_thumbnail()) {
            $taxonomies = get_the_taxonomies(get_the_ID(), array());
            // var_dump($taxonomies);
            // return false;
            if (isset($taxonomies["story"])) {
                $string = $taxonomies["story"];
                $newStr = str_replace("Stories:", "", $string);
                $next_str = str_replace(".", "", $newStr);
                $taxonomy = 'story';
            } elseif (isset($taxonomies["truyen-tranh-thieu-nhi"])) {
                    $string = $taxonomies["truyen-tranh-thieu-nhi"];
                    $newStr = str_replace("Stories:", "", $string);
                    $next_str = str_replace(".", "", $newStr);
                    $taxonomy = 'truyen-tranh-thieu-nhi';
                }
            ?>
              <div class="text-center mb-3">
                  <img src="<?php the_post_thumbnail_url();?>" alt="">

              </div>
              <?php
}?>
           <h4 class="title"><?php the_title();?></h4>
           <?=get_the_date('d/m/Y h:i:s');?>
           <p class="content"><?php the_content();?></p>
           <p>Bài viết được tạo bởi <?=get_the_author_meta("first_name")?> - <?=get_the_author_meta("last_name");?></p>
        <?php

        $posts = get_posts(array(
            'post_type' => 'post',
            'numberposts' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'name',
                    'terms' => $next_str,
                ),
            ),

        )
        );
        // var_dump($posts);
        // return false;
        ?>
        <select name="forma" onchange="window.open(this.value, '_self')">
        <option value="All">Chọn chương</option>
            <?php
        foreach ($posts as $post) {
            ?>

            <option value="<?php echo $post->guid; ?>"><a><?php echo $post->post_title; ?></a></option>

            <?php
        }
        ?>
        </option>
        </select><br>
        <?php
    } 
}
