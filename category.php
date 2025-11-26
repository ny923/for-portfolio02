<?php
/*
Template Name: category(商品一覧)
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
            <a itemprop="item" href="<?= site_url("item"); ?>/">
              <span itemprop="name">Item List</span></a>
            <meta itemprop="position" content="2" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <span itemprop="name"><?php single_cat_title(); ?></span>
            <meta itemprop="position" content="3" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php single_cat_title(); ?></h1>

    </div>
</section>

<section class="section section-item" id="section-item">

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-item" data-aos-once="true" data-aos-duration="1000">

    <div class="item">

      <?php
      $count = isset($_GET['count']) ? intval($_GET['count']) : 10; // 表示件数
      $sort_option = isset($_GET['sort_option']) ? $_GET['sort_option'] : 'display_order_ASC'; // デフォルト(ｵｽｽﾒ順)を変更
      $parts = explode('_', $sort_option); // 安い/高い順

      // 確認用
      // error_log(print_r($parts, true));
      // var_dump($parts); // ページに出るから駄目

      // デフォルト値を確実にセット
      $sort = $parts[0] ?? 'display_order';
      $order = strtoupper($parts[1] ?? 'ASC'); // ASC/DESC を安全に大文字化
      $custom_order_key = 'display_order'; // おすすめ順のカスタムフィールドキー
      $price_sort_key = 'price'; // 値段順
      $slug_sort_key = 'slug';
      $args = array(
        'paged' => $paged,
        'post_type' => 'item',
        'posts_per_page' => $count,
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'  => 'slug',
            'terms'  => get_queried_object()->slug,
          ),
        ),
      );
      if ($sort === $price_sort_key) { // 値段順
        $args['meta_key'] = 'price';    // カスタムフィールドキー
        $args['orderby'] = 'meta_value_num'; // 数値として比較
        $args['order']  = $order;     // ASC or DESC
      } elseif ($sort === $slug_sort_key) {
        // ★スラッグ順
        $args['orderby'] = 'name'; // スラッグに対応する指定
        $args['order'] = $order;
      } elseif ($sort === $custom_order_key) {
        // おすすめ順 が明示的に選択された場合
        $args['meta_key'] = $custom_order_key;
        $args['orderby'] = array(
          'meta_value_num' => 'ASC', // 'display_order'の小さい順を最優先
          'date' => 'DESC'     // 同じ値の場合新しい順
        );
      } else {
        // デフォルト(おすすめ順)の場合
        $args['meta_key'] = $custom_order_key;
        $args['orderby'] = array(
          'meta_value_num' => 'ASC',
          'date' => 'DESC'
        );
      }
      $query = new WP_Query($args); ?>

      <form method="get" class="item-sort">
        <div class="sort-order">
          <p>表示順：</p>
          <label>
            <input type="radio" name="sort_option" value="display_order_ASC"
              onclick="this.form.submit()"
              <?php checked($sort_option, 'display_order_ASC'); ?>>
            おすすめ順
          </label>

          <label>
            <input type="radio" name="sort_option" value="slug_ASC"
              onclick="this.form.submit()"
              <?php checked($sort_option, 'slug_ASC'); ?>>
            品番順
          </label>

          <label>
            <input type="radio" name="sort_option" value="price_ASC"
              onclick="this.form.submit()"
              <?php checked($sort_option, 'price_ASC'); ?>>
            安い順
          </label>

          <label>
            <input type="radio" name="sort_option" value="price_DESC"
              onclick="this.form.submit()"
              <?php checked($sort_option, 'price_DESC'); ?>>
            高い順
          </label>
        </div>

        <div class="sort-display">
          <label>
            表示件数：
            <select name="count" onchange="this.form.submit()">
              <option value="10" <?php selected($count, 10); ?>>10件</option>
              <option value="30" <?php selected($count, 30); ?>>30件</option>
              <option value="50" <?php selected($count, 50); ?>>50件</option>
            </select>
          </label>
        </div>
      </form>

      <ul class="item-list">
        <?php if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post(); ?>

            <a href="<?php the_permalink(); ?>">
              <li class="item-item">
                <div class="item__img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php echo get_the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no-image.webp" alt="no image" decoding="async">
                  <?php endif; ?>
                </div>
                <h3 class="item__title"><?php the_title(); ?></h3>
                <p class="item__code">品番：<?php echo SCF::get('code'); ?></p>
                <p class="item-price">
                  <span class="number">
                    <?php
                    $price = (int) SCF::get('price');
                    echo number_format($price);
                    ?>
                  </span>
                  円(税込)
                </p>

              </li>
            </a>

          <?php endwhile; ?>
      </ul>

      <!-- ページネーション -->
      <?php if ($query->max_num_pages > 1) : ?>
        <div class="pagination">
          <?php
            // echo paginate_links(array(
            //   'total' => $query->max_num_pages,
            //   'current' => max(1, get_query_var('paged')),
            //   'format' => '?paged=%#%',
            //   'prev_text' => __('＜'),
            //   'next_text' => __('＞'),
            // ));

            echo paginate_links(array(
              'total' => $query->max_num_pages,
              'format' => '?paged=%#%',
              'current' => max(1, get_query_var('paged')),
            ));
          ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>