<?php
/*
Template Name:contact
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
            <span itemprop="name"><?php the_title(); ?></span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php the_title(); ?></h1>

    </div>
</section>

<section class="section section-contact" id="section-contact">

  <div class="section-content row w700" data-aos="fade-up" anchor="#section-contact" data-aos-once="true" data-aos-duration="1000">

    <div class="contact">

      <p class="contact__text">FAXの場合<span class="num">03-5848-3127</span></p>

      <div class="contact-texts">
        <p class="contact__text">メールでのお問い合わせは下記フォームから。お気軽にお問い合わせください。</p>
        <p class="contact__text">弊社から折り返し返信致します際、メールが受信できるように［@tf-fencing.co.jp］のドメイン指定受信設定をお願いします。</p>
        <p class="contact__text">ドメイン指定受信設定をされない場合、弊社からのメールが届かない場合がございます。</p>
        <p class="contact__text">※メールのご返信には２～３営業日かかる場合もございます。</p>
      </div>

      <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="e1d4d42" title="お問い合わせ"]'); ?>
      </div>

    </div>

  </div>
</section>

<?php get_footer(); ?>