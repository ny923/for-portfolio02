<?php
/*
  Template Name: single-item
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
                <a itemprop="item" href="<?= site_url("item"); ?>/">
                  <span itemprop="name">Item List</span>
                </a>
                <meta itemprop="position" content="2" />
              </li>
              <!-- <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <span itemprop="name"><?php the_title(); ?></span>
                <meta itemprop="position" content="3" />
              </li> -->

              <?php
              $cats = get_the_category();
              foreach ($cats as $cat):
                $cat_name = $cat->name;
                $cat_url = get_category_link($cat->term_id);
              ?>
                <li itemprop="itemListElement" itemscope
                  itemtype="http://schema.org/ListItem">
                  <a itemprop="item" href="<?php echo esc_url($cat_url); ?>">
                    <span itemprop="name"><?php echo esc_html($cat_name); ?></span>
                    <meta itemprop="position" content="" />
                  </a>
                </li>
              <?php endforeach; ?>

            </ol>
          </div>


          <!-- カテゴリ
          <div class="breadcrumbs">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
              <?php
              $cats = get_the_category();
              foreach ($cats as $cat):
                $cat_name = $cat->name;
                $cat_url = get_category_link($cat->term_id);
              ?>
                <li itemprop="itemListElement" itemscope
                  itemtype="http://schema.org/ListItem">
                  <a itemprop="item" href="<?php echo esc_url($cat_url); ?>">
                    <span itemprop="name"><?php echo esc_html($cat_name); ?></span>
                    <meta itemprop="position" content="3" />
                  </a>
                </li>
              <?php endforeach; ?>
            </ol>
          </div> -->

          <h1 class="headline__title"><?php the_title(); ?></h1>

    </div>
</section>

<section class="section section-detail" id="section-detail">
  <div class="section-content row w1000">
    <div class="detail">

      <div class="detail-imgs">

        <div class="detail__img">
          <?php if (has_post_thumbnail()) : ?>
            <?php echo get_the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no-image.webp" alt="no image" decoding="async">
          <?php endif; ?>
        </div>

        <div class="detail__img-sub">
          <?php $fields = SCF::get('more-img'); ?>
          <?php foreach ($fields as $field): ?>
            <?php if (!empty($field['img'])): ?>
              <img src="<?php echo wp_get_attachment_url($field['img']); ?>" alt="" decoding="async">
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

        <table class="detail-table">
          <tbody>
            <tr>
              <th class="detail__th">品番</th>
              <td class="detail__td">
                <?php
                $scf_field = SCF::get('code');
                echo $scf_field;
                ?></td>
            </tr>
            <tr>
              <th class="detail__th">価格</th>
              <td class="detail__td">
                <span class="number">
                  <?php
                  // $price = (int) SCF::get('price');
                  // echo number_format($price);

                  $scf_field = SCF::get('price');
                  echo $scf_field;
                  ?>
                </span>
                円(税込)
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="detail-texts">
        <h2 class="detail__title">商品詳細</h2>
        <div class="detail__content"><?php the_content() ?></div>
      </div>

  <?php endwhile;
      endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>