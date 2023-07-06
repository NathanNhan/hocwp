<?php
?>
   <h1>Tìm kiếm cho: <?php echo get_search_query() ?></h1>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
        ?>
           <!-- trong đây mới được code html -->
           <!-- shif + Home => chọn dòng mà mình muốn comment => Ctrl + ? để comment -->
           <div class="card">
            <!-- <img class="card-img-top" src="holder.js/100x180/" alt=""> -->
            <div class="card-body">
                <h4 class="card-title">
                    <?php the_title();?>
                </h4>
                <p class="card-text">
                    <?php the_excerpt();?>
                </p>
            </div>
            <div class="card-footer">
                <a class="btn btn-outline-success" href="<?php the_permalink();?>">Xem thêm</a>
            </div>
           </div>

        <?php

        //
    } // end while

} // end if

//Đây là hàm xử lý Phân trang
// the_posts_pagination(array(
//     'prev_text' => 'Chương trước',
//     'next_text' => 'Chương sau',
// ));
previous_posts_link();
next_posts_link();
