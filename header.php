<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/designer.jpg">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="asapp-work">
<meta itemprop="description" content="LP、Wordpressでのコーポレート制作などコーディングでお困りでしたらお任せください。SEOにも準拠したコードを心掛けております">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/images/designer.jpg">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://asapp-work.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="asapp-work">
<meta property="og:description" content="LP、Wordpressでのコーポレート制作などコーディングでお困りでしたらお任せください。SEOにも準拠したコードを心掛けております">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/designer.jpg">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="asapp-work">
<meta name="twitter:description" content="LP、Wordpressでのコーポレート制作などコーディングでお困りでしたらお任せください。SEOにも準拠したコードを心掛けております">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/designer.jpg">
	

<!-- notosans -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

<!-- Fuggles -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fuggles&display=swap" rel="stylesheet">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
<title><?php bloginfo( 'name' ); ?></title>

<!-- User Heat Tag -->
<script type="text/javascript">
(function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhujePrVyT'});
</script>
<!-- End User Heat Tag -->

<?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>

    <!--header-->
	<header class="l-header">
        <div class="l-header__inner">

            <h1 class="l-header__logo c-ttl00">
            <a href="<?php echo home_url(''); ?>">assap-work</a></h1>

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
                    <li class="l-header__list"><a href="<?php echo home_url('skill'); ?>" class="l-header__link">スキル</a></li>
                    <li class="l-header__list"><a href="<?php echo home_url('designer'); ?>" class="l-header__link">デザイナー</a></li>
                    <li class="l-header__list"><a href="<?php echo home_url('news'); ?>" class="l-header__link">ニュース</a></li>
                    <li class="l-header__list"><a href="<?php echo home_url('contact'); ?>" class="l-header__link">コンタクト</a></li>
                </ul>

            </nav>
        </div>
	</header>
     <!--header-->

    <!--main-->
	<main class="l-main">