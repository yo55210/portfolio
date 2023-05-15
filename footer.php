    <!-- footer -->
    <!--topに戻る-->
    <div class="page-top" id="js-page-top">
        <p class="pagetop"><a href="#wrap">▲ BACK TO TOP</a></p>
        <script>
          $(document).ready(function() {
       var pagetop = $('.pagetop');
       $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
         });
        });

       </script>
      </div>

    <footer class="footer">
      <div class="copyright">&copy;YUKI OIDE</div>
    </footer>
    <!-- /footer -->

     
   <?php wp_footer(); ?>

  </body>
</html>
