<?php get_header(); ?>

    <main class="content">

      <div class="backgroundimg">
       <!-- mv -->
       <div class="mv">
        <div class="mv-container">
          <img src="<?php echo get_template_directory_uri(); ?>/img/コピー.jpg" alt="">
           <!--流れるテキスト-->
           <div class="sample02">
             <ul>
              <li>Web Design。</li>
              <li>Coding。</li>
              <li>Yuki Oide。</li>
              <li>Portfolio site。</li>
             </ul>
           </div>
         </div>
       </div>

       <!-- /mv -->        
      </div>


      <div class="backgroundimga">
      <!-- service-->
      <section class="service section" id="service">
        <div class="container">
          <h2 class="title">Service。</h2>
          <p class="ssabtaitle">ホームページの制作Webサイトのリニューアル<br>
            写真加工・バナー制作など行っています
          </p>
          <div class="service_">
             <div class="service-list1">
               <div class="c">
                  <div class="img-size">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/プログラムアイコン.png" alt="">
                  </div>
                  <h4 class="t">Webサイト制作</h4>
                </div>
              </div>

              <div class="service-list2">
                <div class="c">
                  <div class="img-size">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/WordPress-logotype-wmark.png" alt="">
                  </div>
                  <h4>WordPress</h4>
                </div>
              </div>

             <div class="service-list3">
               <div class="c">
                 <div class="img-size">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/iconmonstr-pencil-square-lined-240.png" alt="">
                 </div>
                 <h4>デザイン</h4>
               </div>
              </div>
            </div>

          </div>
        </div>
        </section>
      </div>


      <!-- works -->
      <section class="works section" id="works">
       <div class="container">
           <h2 class="titles">Works。</h2>
               <div class="works-list">
                 <!-- Worksのループ処理 -->
                 <?php
      
                 //取得したい投稿記事などの条件を引数として渡す
                 $args = array(
                 // 投稿タイプ
                 'post_type'      => 'post',
                 // カテゴリー名
                 'category_name' => 'works',
                 // 1ページに表示する投稿数
                  'posts_per_page' => 15
                 );
                 // データの取得
                 $posts = get_posts($args);

                 ?>
               
                 <?php foreach($posts as $post): ?>
                 <?php setup_postdata($post); ?>
                 <!-- aタグで投稿記事へのリンクを作成 -->
                 <a class="works-item" href="<?php the_permalink(); ?>">
                 <!-- サムネイルを表示 -->
                 <div class="works-img"><?php the_post_thumbnail(); ?></div>
                 <!-- 投稿のタイトルを表示 -->
                 <p class="works-name"><?php the_title(); ?></p>
                 <!-- 詳細 -->
                 <p class="works-info"><?php echo post_custom('skill'); ?></p>
              


                  <?php endforeach; ?>
                  <!-- 使用した投稿データをリセット -->
                  <?php wp_reset_postdata(); ?>
              </div>
         </div>
      </section>
      <!-- /works -->

      <!-- skill -->
      <section class="skill section" id="skill">
        <div class="container">
          <h2 class="title">Skill。</h2>
          <div class="skill-list">
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri();?>/img/skills/html.png" alt="html"></p>
              <div class="skill-body">
                <h3 class="skill-name">HTML/CSS</h3>
                <p class="skill-text">
                  スマホで見ても表示崩れのないレスポンシブ対応も可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri();?>/img/skills/wordpress.png" alt="wordpress"></p>
              <div class="skill-body">
                <h3 class="skill-name">WordPress</h3>
                <p class="skill-text">
                  WordPress製の店舗HP・企業HP・メディアサイトなど、Webサイトを0から構築することが可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri();?>/img/skills/js.png" alt="javascript"></p>
              <div class="skill-body">
                <h3 class="skill-name">JavaScript</h3>
                <p class="skill-text">
                  お問い合わせフォームや自動スクロールなど動きのあるWebサイトを作る事が可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri();?>/img/skills/photoshop.png" alt="photoshop"></p>
              <div class="skill-body">
                <h3 class="skill-name">Adobe Photoshop</h3>
                <p class="skill-text">
                  Webサイトに必要不可欠なクリエイティブバナーを作ることが可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri();?>/img/skills/jquery.png" alt="jquery"></p>
              <div class="skill-body">
                <h3 class="skill-name">jQuery</h3>
                <p class="skill-text">
                  Webサイトにフェードイン・フェードアウトなどリッチな動きをつけることが可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <p class="skill-img"><img src="<?php echo get_template_directory_uri();?>/img/skills/xd.png" alt="adobexd"></p>
              <div class="skill-body">
                <h3 class="skill-name">Adobe XD</h3>
                <p class="skill-text">
                  Webサイトのデザインやワイヤーフレームを作ることが可能です。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /skill -->

      <!-- about -->
      <section class="about section" id="about">
        <div class="container">
          <h2 class="title">About。</h2>
          <div class="profile">
            <p class="profile-img">
              <img src="<?php echo get_template_directory_uri();?>/img/イラスト20.jpg" alt="about">
            </p>
            <div class="profile-body">
              <p>
                大出　友喜
              </p>
              <p>
                栃木県在住。フリーランスとしてWeb制作をしております。予てより趣味でしていたWebサイト制作を2023年より副業にしました。Web制作におけるデザイン、コーディング、スマートフォンサイト対応、WordPressなどが得意分野です。低予算でWebサイトをお作りしますので、お気軽にお問い合わせください。
              </p>
              
            </div>
          </div>
        </div>
      </section>
      <!-- /about -->

      <!-- contact -->
      <section class="contact section" id="contact">
        <div class="container">
          <h2 class="title">Contact。</h2>
          <p class="lead">
            お問い合わせは、<br class="sp-only">メールまたはSNSにてお願いいたします。<br><br>Email: appleyok1235@gmail.com
          </p>
          <div class="contact-list">
            <a href="http://twitter.com/@Apyouxi55210" target="_blank">
              <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-twitter-1-72.png" alt="twitter">
            </a>
          </div>
        </div>
      </section>
      <!-- /contact -->

    </main>
  </div>
<?php get_footer(); ?>

