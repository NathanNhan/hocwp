<?php

$terms = get_terms('truyen-tranh-thieu-nhi');

var_dump($terms);


echo '<ul>';

foreach ($terms as $term) {
    $image = get_field('image_tax', 'truyen-tranh-thieu-nhi' . '_' . $term->term_id);
    var_dump($image['url']);
    // The $term is an object, so we don't need to specify the $taxonomy.
    $term_link = get_term_link($term);

    // If there was an error, continue to the next term.
    if (is_wp_error($term_link)) {
        continue;
    }

    // We successfully got a link. Print it out.
    echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';
    echo "<p>$term->description</p>";
}

echo '</ul>';
