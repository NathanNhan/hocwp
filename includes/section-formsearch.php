<?php

/* Custom search form */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')); ?>" class="input-group mb-3">
  <div class="input-group">
    <!-- Tìm kiếm cho Custom post type -->
    <!-- <input type="hidden" name="post_type" value="movie"> -->
    <input type="hidden" name="cat" value="39">
    <input type="search" class="form-control border-0" placeholder="Search" aria-label="search nico" name="s" id="search-input" value="<?php echo esc_attr(get_search_query()); ?>">
      <div class="input-group-append">
         <span class="input-group-append p-0">
          <i class="fas fa-search text-muted"></i>
         </span>
    </div>
  </div>
</form>
