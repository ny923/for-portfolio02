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
            <span itemprop="name">INFORMATION</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title">INFORMATION</h1>

    </div>
</section>

<section class="section section-info" id="section-info">

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-info" data-aos-once="true" data-aos-duration="1000">

    <div class="info">

      <ul class="info-list">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'paged' => $paged,
          'posts_per_page' => 6, // 表示する投稿数
          'post_type' => 'info', // 取得する投稿タイプのスラッグ
          'orderby' => 'date', //日付で並び替え
          'order' => 'DESC' // 降順DESC or 昇順ASC
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <a href="<?php the_permalink(); ?>">
              <li class="info-item">
                <time class="info__date" date="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
                <h3 class="info__title"><?php echo get_the_title(); ?></h3>
              </li>
            </a>

          <?php endwhile; ?>
      </ul>

      <!-- ページネーション -->
      <?php if ($the_query->max_num_pages > 1) : ?>
        <div class="pagination">
          <?php
            echo paginate_links(array(
              'total' => $the_query->max_num_pages,
              'current' => max(1, get_query_var('paged')),
              'format' => '?paged=%#%',
              'prev_text' => __('＜'),
              'next_text' => __('＞'),
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