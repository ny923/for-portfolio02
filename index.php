<?php
/*
Template Name:front-page
*/
?>

<?php get_header(); ?>

<section class="section section-swiper">
  <div class="section-content">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
        $fields = SCF::get_option_meta('slider-options', 'slider-img'); ?>

        <?php foreach ($fields as $field):
          $slide_url = $field['slide-url'];
          if (!empty($slide_url)): ?>

            <div class="swiper-slide">
              <a href="<?php echo $slide_url; ?>" target="_blank">
                <img src="<?php echo wp_get_attachment_url($field['slide']); ?>" alt="">
              </a>
            </div>
          <?php else : ?>
            <div class="swiper-slide">
              <img src="<?php echo wp_get_attachment_url($field['slide']); ?>" alt="">
            </div>
          <?php endif; ?>

        <?php endforeach; ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>

<!-- 自由記述  -->
<section class="section section-static" id="section-static">
  <div class="section-content row w700" data-aos="fade-up" anchor="#section-free" data-aos-once="true" data-aos-duration="1000">
    <div class="static edit">
      <?php
      $page_id = get_page_by_path('top-free-space');
      $page = get_post($page_id);
      echo $page->post_content;
      ?>
    </div>
  </div>
</section>

<section class="section section-info" id="section-info">
  <div class=" headline " data-aos=" fade-up" anchor="#section-info" data-aos-once="true" data-aos-duration="1000">
    <h2 class="headline__title">INFORMATION</h2>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-info" data-aos-once="true" data-aos-duration="1000">
    <div class="info">

      <ul class="info-list">
        <?php
        $args = array(
          'posts_per_page' => 3, // 表示する投稿数
          'post_type' => array('info'), // 取得する投稿タイプのスラッグ
          'orderby' => 'date', //日付で並び替え
          'order' => 'DESC' // 降順DESC or 昇順ASC
        );
        $my_posts = get_posts($args);
        ?>
        <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>">
            <li class="info-item">
              <time class="info__date" date="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
              <h3 class="info__title"><?php echo get_the_title(); ?></h3>
            </li>
          </a>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>

      <a class="simple-btn" href="<?= site_url(); ?>/info/">過去一覧を見る</a>

    </div>
  </div>
</section>


<section class="section section-item" id="section-item">

  <div class=" headline " data-aos=" fade-up" anchor="#section-item" data-aos-once="true" data-aos-duration="1000">
    <h2 class="headline__title">New Arrival</h2>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-item" data-aos-once="true" data-aos-duration="1000">
    <div class="item">

      <ul class="item-list">
        <?php

        if (is_smartphone()) {
          $num = 4;
        } else {
          $num = 6;
        }

        $args = array(
          'posts_per_page' => $num, // 表示する投稿数
          'post_type' => array('item'), // 取得する投稿タイプのスラッグ

          // 任意式に変更中
          // 'orderby' => 'date', //日付で並び替え
          // 'order' => 'DESC' // 降順DESC or 昇順ASC
        );
        $my_posts = get_posts($args);
        ?>
        <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>">
            <li class="item-item">

              <div class="item__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php echo get_the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no-image.webp" alt="no image" decoding="async">
                <?php endif; ?>
              </div>

              <h3 class="item__title"><?php echo get_the_title(); ?></h3>

              <p class="item-price">
                <span class="number">
                  <?php

                  $price = SCF::get('price');
                  echo number_format((int)$price);
                  ?>
                </span>
                円(税込)
              </p>

            </li>
          </a>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>

      <a class="simple-btn" href="<?= site_url(); ?>/item/">商品一覧はこちら</a>

    </div>
  </div>
</section>


<section class="section section-access" id="section-access">
  <div class="headline" data-aos="fade-up" anchor="#section-access" data-aos-once="true" data-aos-duration="1000">
    <h2 class="headline__title">ACCESS</h2>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-access" data-aos-once="true" data-aos-duration="1000">
    <div class="access">

      <div class="access-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3238.550697305955!2d139.63969!3d35.737267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018edb02271a8db%3A0x74c1003c7438ea9d!2z5pel5pys44CB44CSMTc2LTAwMjIg5p2x5Lqs6YO957e06aas5Yy65ZCR5bGx77yR5LiB55uu77yR77yU4oiS77yS!5e0!3m2!1sja!2sus!4v1758072576576!5m2!1sja!2sus" width="999" height="999" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="access-texts row w700">
        <h3 class="access__title">駐停車に関するお願い</h3>

        <p class="access__text">いつも当店をご利用いただき、誠にありがとうございます。<br>
          お客様や近隣の皆さまが安心してご利用いただける環境を保つため、店舗周辺での駐停車はご遠慮いただきますようお願い申し上げます。</p>
        <p class="access__text">当店をご利用の際は、周辺のコインパーキングをご利用いただけますと幸いです。<br>
          周辺住民の方々や歩行者の安全を守るため、皆さまのご協力を心よりお願い申し上げます。</p>
        <p class="access__text">ご不便をおかけいたしますが、何卒ご理解とご協力を賜りますようお願い申し上げます。</p>
      </div>

    </div>
  </div>
</section>


<section class="section section-calendar" id="section-calendar">
  <div class="headline" data-aos="fade-up" anchor="#section-calendar" data-aos-once="true" data-aos-duration="1000">
    <h2 class="headline__title">営業日カレンダー</h2>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-calendar" data-aos-once="true" data-aos-duration="1000">
    <div class="calendar">

      <!-- googleカレンダーの場合 -->
      <!-- <div id="MonthCal" class="calendar-prev"></div>
      <div id="nextMonthCal" class="calendar-next"></div> -->

      <!-- event-calendarの場合 -->
      <div class="calendar-wrapper">
        <div id="calendar" class="calendar-sel"></div>
        <div id="calendarNext" class="calendar-sel"></div>
      </div>

      <!-- FullCalendar ↑とほぼ変わらず没
      <div class="calendar-wrapper">
        <div id="calendar" class="calendar-sel"></div>
        <div id="calendarNext" class="calendar-sel"></div>
      </div> -->

      <p class="calendar__text">グレー部分が休業日となります。</p>

    </div>
  </div>
</section>


<section class="section section-links" id="section-links">
  <div class="headline" data-aos="fade-up" anchor="#section-links" data-aos-once="true" data-aos-duration="1000">
    <h2 class="headline__title">外部リンク集</h2>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-links" data-aos-once="true" data-aos-duration="1000">
    <div class="links">

      <ul class="links-list">
        <li class="links__item"><a href="https://nexus-fencingclub.com/" target="_blank">FENCING CLUB</a></li>
        <li class="links__item"><a href="http://escrime.jp/" target="_blank">東京都フェンシング協会</a></li>
        <li class="links__item"><a href="https://fencing-jpn.jp/" target="_blank">日本フェンシング協会</a></li>
        <li class="links__item"><a href="https://fie.org/" target="_blank">国際フェンシング連盟</a></li>
      </ul>

    </div>
  </div>
</section>



<?php get_footer(); ?>