<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="YUKI OIDEのポートフォリオサイトです。">
  <title>YUKI OIDE ポートフォリオ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&family=Inter:wght@500;600&family=Poppins:wght@400;900&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/ress.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" media="all" rel="stylesheet" type="text/css" />
  <script src="<?php echo get_template_directory_uri() ?>/test.js" type="text/javaScript" charset="utf-8"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
<!-- header -->
    <header class="header ">
        <div class="h-list">
          <div class="left">
            <nav class="gnav">
              <ul class="gnav-list">
                <li class="gnav-item"><a href="/#works">Works</a></li>
                <li class="gnav-item"><a href="/#skill">Skill</a></li>
                <li class="gnav-item"><a href="/#about">About</a></li>
                <li class="gnav-item"><a href="/#contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="center">
            <h1 class="header-logo">
              <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/名称未設定-2.png"  alt="トップに戻る">
              </a>
            </h1>
          </div>

          <!-- グローバルメニューとハンバーガー -->
          <div class="right">

            <div class="hamburger-menu">
              <input type="checkbox" id="menu-btn-check">
              <label for="menu-btn-check" class="menu-btn"><span></span></label>
               <!--ここからメニュー-->
                <div class="menu-content">
                 <ul>
                    <li>
                      <a href="/#service">Service</a>
                   </li>
                   <li>
                    <a href="/#works">Works</a>
                   </li>
                    <li>
                      <a href="/#skill">Skill</a>
                   </li>
                   <li>
                    <a href="/#about">About</a>
                   </li>
                   <li>
                   <a href="/#contact">Contact</a>
                   </li>
                 </ul>
               </div> 
               <!--ここまでメニュー-->  
             </div>
          </div>
        </div>

      </div>

      
    </header>
    <!-- /header -->