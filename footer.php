<div id="page_top" class="page_top"></div>
</main>

<footer class="site-footer" id="site-footer">
  <div class="section-content row w1000">
    <div class="footer">

      <div class="footer-info">

        <div>
          <div class="footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="東京フェンシング商会">
          </div>
          <strong class="footer__name">株式会社 東京フェンシング商会</strong>
        </div>

        <div class="footer-address">
          <address class="address">〒176-0022　東京都練馬区向山１-１４-２</address>
          <p class="close-open">定休日：火曜日　営業時間：10:00～18:30</p>
          <p class="tel">TEL：<a href="tel:0358483126" class="tel">03-5848-3126</a></p>
        </div>
        <!-- <div class="footer-tel">
          <p class="">お電話でのお問い合わせ</p>
          <a href="tel:0358483126" class="tel">03-5848-3126</a>
        </div> -->
      </div>

      <?php wp_nav_menu(array(
        'theme_location' => 'secondary',
        'menu' => 'footer-main',
        'container' => 'ul',
        'menu_class' => 'footer-list',
        'before' => '<li class="footer__item">',
        'after' => '</li>',
      )); ?>

      <?php wp_nav_menu(array(
        'theme_location' => 'secondary',
        'menu' => 'footer-sub',
        'container' => 'ul',
        'menu_class' => 'footer-list',
        'before' => '<li class="footer__item">',
        'after' => '</li>',
      )); ?>

      <p class="copy">Copyright (C) 東京フェンシング商会 All Rights Reserved.</p>

    </div>
  </div> <!-- /inner -->
</footer> <!-- /footer -->


<!-- jquery読込 -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- nav -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<?php if (is_front_page()): ?>
  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>



  <!-- カレンダーjs -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/calendar.js"></script>
<?php endif; ?>

<!-- aos.js(パララックス) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
  AOS.init();
</script>

<!-- to top -->
<script type="text/javascript">
  const PageTopButton = document.getElementById('page_top');
  PageTopButton.addEventListener('click', function foo() {
    const nowY = window.pageYOffset;
    window.scrollTo(0, Math.floor(nowY * 0.8));
    if (nowY > 0) {
      window.setTimeout(foo, 20);
    }
  });
  const obj = document.getElementById("page_top");
  window.onscroll = function() {
    var scrollTop =
      document.documentElement.scrollTop || // IE、Firefox、Opera
      document.body.scrollTop; // Chrome、Safari
    if (scrollTop > 1000) {
      obj.classList.add("show");
    } else {
      obj.classList.remove("show");
    }
  }
</script>
<?php wp_footer(); ?>

</div>
<!-- /.wrap -->

</body>

</html>