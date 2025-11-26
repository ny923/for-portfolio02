<?php
/*
Template Name:access
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

<section class="section section-static" id="section-static">

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-static" data-aos-once="true" data-aos-duration="1000">

    <div class="static">

      <section class="section static-wrap">
        <h2 class="static__title">アクセスマップ</h2>
        <div class="static-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3238.550697305955!2d139.63969!3d35.737267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018edb02271a8db%3A0x74c1003c7438ea9d!2z5pel5pys44CB44CSMTc2LTAwMjIg5p2x5Lqs6YO957e06aas5Yy65ZCR5bGx77yR5LiB55uu77yR77yU4oiS77yS!5e0!3m2!1sja!2sus!4v1758072576576!5m2!1sja!2sus" width="999" height="999" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>

      <div class="static-texts row w700">
        <section class="section static-wrap">
          <h2 class="static__title">所在地</h2>
          <address class="static__text">東京都練馬区向山1-14-2</address>
        </section>

        <section class="section static-wrap">
          <h2 class="static__title">アクセス</h2>
          <p class="static__text">中村橋北口よりマルシェで3分（徒歩2分）<br>
            ※マルシェ：フェンシングの前進動作のこと<br>
            参考　<a href="https://youtu.be/4JJCsdLpxK8?feature=shared">https://youtu.be/4JJCsdLpxK8?feature=shared</a></p>
        </section>
      </div>

    </div>

  </div>
</section>

<?php get_footer(); ?>