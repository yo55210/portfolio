<?php get_header();?>
    <main class="content">
<!--ループ処理-->
      <article class="article">
        <div class="article-container">
          <?php
          if(have_posts()):
            while (have_posts()):the_post();
            ?>
          <h2 class="article-title"><?php the_title();?></h2>
          <div class="article-body">
            <?php the_content();?> 
          </div>
          <div class="home-link">
            <a href="/#works">Works一覧へ</a>
          </div>
        </div>
      </article>



      <?php
        endwhile;
      endif;
      ?>



    </main>

    <?php get_footer(); ?>