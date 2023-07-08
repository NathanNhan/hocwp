<?php 
get_header();
//Show khung search cho thể loại trinh thám
get_template_part('includes/section','formsearch');
$terms = get_terms('story');

echo '<div class="row">';

foreach ($terms as $term) {
    //Lấy hình ảnh từ field để in ra giao diện
    $image = get_field('tax_image', 'story' . '_' . $term->term_id);
    // var_dump($image);
    // return false;


    // The $term is an object, so we don't need to specify the $taxonomy.
    $term_link = get_term_link($term);

    // If there was an error, continue to the next term.
    if (is_wp_error($term_link)) {
        continue;
    }

    // We successfully got a link. Print it out.
    ?>
        <div class="col col-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="" width="150" height="300"/>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo '<li style="list-style:none;"><a style="text-decoration:none;" href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';?>
                    </h4>
                    <p class="card-text">
                        <?php echo $term->description; ?>
                    </p>
                </div>
            </div>
        </div>
    <!-- echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>'; -->

    <?php
}

echo '</div>';


get_footer();
