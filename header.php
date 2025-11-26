<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title(' | ', true, 'right');
          bloginfo('name'); ?></title>
  <meta name="description" content="フェンシング用品の通販サイト。ショッピングカートの他、電話・FAX・メールでの注文も承っております。日本で唯一、ドイツALLSTAR社正規代理店の東京フェンシング商会です。ＨＰを全面リニューアルしましたので、是非、一度ご覧ください。">
  <meta name="keywords" content="フェンシング,fencing, hogehuga ">
  <link rel="canonical" href="<?= site_url(); ?>/">
  <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />

  <!-- aos.js用 -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
  <?php if (is_front_page()): ?>
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css" />

    <!-- top calendar用「event-calendar」 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@event-calendar/build@2.6.1/event-calendar.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@event-calendar/build@2.6.1/event-calendar.min.js"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@event-calendar/core@4.6.0/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@event-calendar/day-grid@4.6.0/index.css">
    <script src="https://cdn.jsdelivr.net/npm/@event-calendar/core@4.6.0/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@event-calendar/day-grid@4.6.0/index.global.min.js"></script> -->

    <!-- FullCalendar
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script> -->

    <!-- 自由記述枠で使用 -->
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/static.css" />

  <?php elseif (is_page('contact')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css" />

    <!-- item list -->
  <?php elseif (is_post_type_archive('item') || is_singular('item')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/item.css" />

    <!-- infomation -->
  <?php elseif (is_post_type_archive('info') || is_singular('info')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/info.css" />

    <!-- access order等固定共通 static  -->
  <?php elseif (is_page() || is_single() || is_404()): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/static.css" />
  <?php endif; ?>

  <link rel="shortcut icon" href="<?php echo wp_get_attachment_url($favicon_img); ?>">
  <link rel="apple-touch-icon" href="<?php echo wp_get_attachment_url($favicon_img); ?>">

  <!-- og関連 -->
  <meta property="og:url" content="<?= site_url(); ?>/" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="フェンシング用品の通販サイト。ショッピングカートの他、電話・FAX・メールでの注文も承っております。日本で唯一、ドイツALLSTAR社正規代理店の東京フェンシング商会です。ＨＰを全面リニューアルしましたので、是非、一度ご覧ください。" />
  <meta property="og:title" content="<?php wp_title(' | ', true, 'right');
                                      bloginfo('name'); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>のWebサイト" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.jpg" />
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.jpg">
  <!-- <meta property="fb:app_id" content="123********" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  wp_deregister_style('wp-block-library');
  wp_head();
  ?>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
          "@type": "Organization",
          "name": "東京フェンシング商会",
          "url": "https://www.tf-fencing.co.jp/",
          "description": "NEXUSフェンシングクラブでは、フェンシングを牽引する企業として「絆」というキーワードを掲げフェンシング経験者・初心者・興味のある方の垣根を超えて分け隔てなくフェンシングという競技を楽しんでいただきたく立ち上げたクラブとなります。",
          "image": "https://www.tf-fencing.co.jp/wp-content/themes/temp/assets/img/common/ogp.jpg",
          "telephone": "03-5848-2131",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "向山1-14-2",
            "addressLocality": "練馬区",
            "addressRegion": "東京都",
            "postalCode": "176-0022",
            "addressCountry": "JP"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 35.7372,
            "longitude": 139.6396
          },
          "openingHoursSpecification": [{
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Sunday"],
              "opens": "10:00",
              "closes": "19:00"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": [
                "Monday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
              ],
              "opens": "13:00",
              "closes": "21:00"
            }
          ],
          "priceRange": "¥¥",
          "sameAs": ["https://nexus-fencingclub.com/"]

        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "ホーム",
          "url": "https://www.tf-fencing.co.jp/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "お問合わせ",
          "url": "https://www.tf-fencing.co.jp/contact/"
        }
      ]
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "株式会社ステッチ",
      "url": "https://e-stitch.jp/",
      "logo": "https://e-stitch.jp/wp-content/themes/stitch/img/common/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "technical support",
        "areaServed": "JP",
        "availableLanguage": "Japanese",
        "telephone": "+81-027-289-3315",
        "email": "info@e-stitch.jp"
      }
    }
  </script>

</head>

<body ontouchstart="" class="<?php if (is_front_page()) {
                                echo 'is-top';
                              } elseif (is_page('contact')) {
                                echo 'is-contact';
                              } elseif (is_post_type_archive('item')) {
                                echo 'is-item';
                              } elseif (is_singular('item')) {
                                echo 'is-detail';
                              } elseif (is_post_type_archive('info')) {
                                echo 'is-info';
                              } elseif (is_page('access')) {
                                echo 'is-access';
                              } elseif (is_page('order')) {
                                echo 'is-order';
                              } elseif (is_page('guide')) {
                                echo 'is-guide';
                              }; ?>">


  <?php
  //echo get_the_ID(); // 開発中のみ！
  ?>

  <div class="wrap">

    <!-- nav -->
    <header class="site-header" id="site-header">
      <div class="masthead">

        <h1 class="brand-logo">
          <a href="<?= site_url(); ?>/">
            <!-- logo.png -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="東京フェンシング商会">
            <!-- <p class="brand-logo__text pc">東京フェンシング商会</p> -->
          </a>
        </h1>

        <nav class="globalnav" id="js-globalnav">
          <input type="checkbox" id="nav-toggle" class="sp">
          <label for="nav-toggle" class="nav-button sp">
            <span class="nav-bar"></span>
            <span class="nav-bar"></span>
            <span class="nav-bar"></span>
          </label>

          <div class="globalnav-inner">
            <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu' => 'header',
              'container' => 'ul',
              'menu_class' => 'globalnav-list',
              'before' => '<li class="globalnav__item" itemprop="name">',
              'after' => '</li>',
            )); ?>
          </div>
        </nav>

      </div>
    </header>

    <main class="site-main" id="site-main">