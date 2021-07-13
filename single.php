<?php get_header(); ?>

<section class="s-blog-block">
<div class="l-inner02">

<?php
    $args = array(
    'post_type' => 'post',
    'paged' => $paged,
 ); ?>

<h2 class="s-blog-block__ttl"><?php the_title(); ?></h2>

<div class="s-blog-block__image">
    <img src="<?php the_field( 'アイキャッチ' ); ?>" alt="">
</div>

<p class="s-blog-block__txt">

<?php the_field( '概要' ); ?>

</p>

<a href="<?php the_field( 'リンク' ); ?>" class="s-blog-block__link" target="_blank"><?php the_field( 'リンク' ); ?></a>


<div class="s-blog-block__group">
    <div class="s-blog-block__btn"><?php previous_post_link('%link', '前の制作へ'); ?></div>
    <div class="s-blog-block__btn"><a href="<?php echo home_url('news'); ?>">一覧に戻る</a></div>
    <div class="s-blog-block__btn"><?php next_post_link('%link', '次の制作へ'); ?></div>
</div>

</div>
</section>

<?php get_footer(); ?>