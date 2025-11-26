<?php
/*
  Template Name: single-info
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
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
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?= site_url("info"); ?>/">
                  <span itemprop="name">INFORMATION</span>
                </a>
                <meta itemprop="position" content="2" />
              </li>
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <span itemprop="name"><?php the_title(); ?></span>
                <meta itemprop="position" content="3" />
              </li>
            </ol>
          </div>



          <h1 class="headline__title"><?php the_title(); ?></h1>

    </div>
</section>

<section class="section section-info" id="section-info">
  <div class="section-content row w700">
    <div class="info">

      <div class="info__img">
        <?php if (has_post_thumbnail()) : ?>
          <?php echo get_the_post_thumbnail(); ?>
        <?php else: ?>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no-image.webp" alt="no image" decoding="async"> -->
        <?php endif; ?>
      </div>

      <!-- 追加日／更新日-->
      <p class="info__date"><time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time></p>
      <!--<p><time datetime=""><?php the_modified_date('Y/m/d') ?></time></p>-->

      <div class="info__content"><?php the_content() ?></div>

  <?php endwhile;
      endif; ?>
    </div>
  </div>

  <div class="section-content row w1000">
    <div class="info">
      <?php
      the_post_navigation();
      ?>

    </div>
  </div>



</section>

<?php get_footer(); ?>