<?php get_header(); ?>

            <!--fv-->
            <section class="p-home-work">
            <div class="l-inner">

            <h2 class="c-ttl">Home</h2>


                <ul class="p-home-work__group">

                <?php
                    $args = array(
                    'post_type' => 'gallery',
                    'paged' => $paged,
                    'posts_per_page' => 6
                ); ?>

                <?php query_posts($args); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <li class="p-home-work__list">
                        <a href="<?php the_permalink(); ?>" class="p-home-work__link">
                            <img src="<?php the_field( 'キャプチャ' ); ?>" alt="" class="p-home-work__image"></a>
                    </li>

                 <?php endwhile; ?><?php endif; ?>

                </ul>

                <a href="<?php echo home_url('gallery'); ?>" class="c-btn">一覧へ</a>


            </div>
            </section>
            <!--fv-->

<?php get_footer(); ?>
	

	
	