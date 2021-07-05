<?php get_header(); ?>

<section class="s-gallery-block">
<div class="l-inner02">

<?php
    $args = array(
    'post_type' => 'gallery',
    'paged' => $paged,
 ); ?>


<h2 class="s-gallery-block__ttl"><?php the_title(); ?></h2>

<div class="s-gallery-block__image">
    <img src="<?php the_field( 'キャプチャ' ); ?>" alt="">
</div>

<?php
    $制作背景 = get_field('制作背景');
    if ($制作背景) : ?>

<p class="s-gallery-block__txt">

<?php the_field( '制作背景' ); ?>

</p>

<?php endif; ?>

<a href="<?php the_field( 'リンク' ); ?>" class="s-gallery-block__link" target="_blank"><?php the_field( 'リンク' ); ?></a>


<div class="s-gallery-block__group">
    <div class="s-gallery-block__btn"><?php previous_post_link('%link', '前の制作へ'); ?></div>
    <div class="s-gallery-block__btn"><a href="<?php echo home_url('gallery'); ?>">一覧に戻る</a></div>
    <div class="s-gallery-block__btn"><?php next_post_link('%link', '次の制作へ'); ?></div>
</div>

</div>
</section>

<?php get_footer(); ?>