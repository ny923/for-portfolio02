<?php
/*
  Template Name: single
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content ">
    <div class="headline">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <!-- パンくず -->
          <div class="breadcrumbs">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?= site_url(); ?>/">
                  <span itemprop="name">HOME</span></a>
                <meta itemprop="position" content="1" />
              </li>
              <!-- <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?= site_url("item"); ?>/">
                  <span itemprop="name">Item List</span>
                </a>
                <meta itemprop="position" content="2" />
              </li> -->
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <span itemprop="name"><?php the_title(); ?></span>
                <meta itemprop="position" content="2" />
              </li>
            </ol>
          </div>



          <h1 class="headline__title"><?php the_title(); ?></h1>
    </div>
</section>

<section class="section section-static" id="section-static">
  <div class="section-content row w700">
    <div class="static edit">

      <!-- 追加日／更新日
          <p><time datetime=""><?php the_time('Y/m/d'); ?></time></p>
          <p><time datetime=""><?php the_modified_date('Y/m/d') ?></time></p>-->

      <!-- カテゴリ
          <div class="breadcrumbs">
            <ol>
              <?php
              $cats = get_the_category();
              foreach ($cats as $cat):
                $cat_name = $cat->name;
                $cat_url = get_category_link($cat->term_id);
              ?>
                <li class="">
                  <a href="<?php echo esc_url($cat_url); ?>">
                    <?php echo esc_html($cat_name); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ol>
          </div> -->

      <div class="static__thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>

      <div class="static-contents">
        <?php the_content(); ?>
      </div>

  <?php endwhile;
      endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>