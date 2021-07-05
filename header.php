<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="favicon.ico">

<!-- notoserif -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">

<!-- Fuggles -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fuggles&display=swap" rel="stylesheet">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
<title><?php bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>

    <!--header-->
	<header class="l-header">
        <div class="l-header__inner">

            <h1 class="l-header__logo c-ttl00">assap-work</h1>

            <div class="l-header__btn">
                <div class="js-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <nav class="l-header__nav">
                <ul class="l-header__group">
                    <li class="l-header__list"><a href="<?php echo home_url(''); ?>" class="l-header__link">ホーム</a></li>
                    <li class="l-header__list"><a href="<?php echo home_url('gallery'); ?>" class="l-header__link">ギャラリー</a></li>
                    <!-- <li class="l-header__list"><a href="<?php echo home_url('service'); ?>" class="l-header__link">サービス</a></li> -->
                    <li class="l-header__list"><a href="<?php echo home_url('designer'); ?>" class="l-header__link">デザイナー</a></li>
                    <!-- <li class="l-header__list"><a href="<?php echo home_url('blog'); ?>" class="l-header__link">ブログ</a></li> -->
                    <li class="l-header__list"><a href="<?php echo home_url('contact'); ?>" class="l-header__link">コンタクト</a></li>
                </ul>

            </nav>
        </div>
	</header>
     <!--header-->

    <!--main-->
	<main class="l-main">