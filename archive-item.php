<?php
/*
Template Name: archive-item
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
    <div class="headline">

      <!-- パンくず -->
      <div class="breadcrumbs">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url(); ?>/">
              <span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <span itemprop="name">Item List</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title">Item List</h1>

    </div>
</section>

<section class="section section-category" id="section-category">

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-category" data-aos-once="true" data-aos-duration="1000">

    <div class="category">

      <div class="category-left">

        <div class="category__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/list-img.jpg" alt="" decoding="async">
        </div>

        <!-- 任意に順番変えられるが、開閉式にするには？
          menu数多いとエラー起こす？2手に分けても直らず
        <p>wpカスタマイズmenuの場合</p>
        <div class="wp-menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'sidebar',
            'menu' => 'category01',
            'container' => 'ul',
            'menu_class' => 'category-list',
            'before' => '<li class="category-item" itemprop="name">',
            'after' => '</li>',
          )); ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'sidebar',
            'menu' => 'category02',
            'container' => 'ul',
            'menu_class' => 'category-list',
            'before' => '<li class="category-item" itemprop="name">',
            'after' => '</li>',
          )); ?>
        </div> -->

      </div>

      <div class="category-right">


        <ul class="category-list">
          <?php
          function my_category_tree($parent_id = 0, $is_root = false)
          {
            $args = array(
              'orderby' => 'item', // item
              'order'   => 'ASC', // DESC
              'parent'  => $parent_id,
            );
            $categories = get_categories($args);

            if ($categories) {
              echo $is_root ? '<ul class="category-level root">' : '<ul class="category-level">';
              foreach ($categories as $category) {
                $id = 'cat-' . $category->term_id;

                // 子カテゴリを取得（孫以降の有無を判定するため）
                $child_cats = get_categories(array(
                  'parent'  => $category->term_id,
                  'orderby' => 'item',
                  'order'   => 'DESC',
                ));

                echo '<li class="category-item">';

                // 子がある場合 → 開閉
                if ($child_cats) {
          ?>
                  <input type="checkbox" id="<?php echo $id; ?>" class="toggle-checkbox" hidden>
                  <label for="<?php echo $id; ?>" class="category__label">
                    <span class="category__name"><?php echo esc_html($category->name); ?></span>
                  </label>
                <?php
                  my_category_tree($category->term_id);
                } else {
                  // 末端カテゴリ→ 投稿一覧ページへのリンク付与
                ?>
                  <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="category__link">
                    <span class="category__name"><?php echo esc_html($category->name); ?></span>
                  </a>
          <?php
                }

                echo '</li>';
              }
              echo '</ul>';
            }
          }

          // 親カテゴリからスタート
          my_category_tree(0, true);
          ?>
        </ul>




      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>