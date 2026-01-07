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
      // クエリ自体はfunctionsで処理済み
      // ここではフォーム表示用の値だけ取得
      $count = isset($_GET['count']) ? intval($_GET['count']) : 10;
      $sort_option = isset($_GET['sort_option']) ? $_GET['sort_option'] : 'display_order_ASC';
      ?>

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

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>

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


      <div class="pagination">
        <?php
          // メインクエリ用のページネーション関数を使用
          echo paginate_links(array(
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
            'type'      => 'list',
            // ページ移動時にGETパラメータ（並び順・件数）を引き継ぐ設定
            'add_args'  => array(
              'count' => $count,
              'sort_option' => $sort_option,
            ),
          ));
        ?>
      </div>

    <?php else : ?>
      <p>該当する商品はありませんでした。</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>