<?php get_header(); ?>

            <!--blog-->
            <section class="p-home-blog">
            <div class="l-inner">

            <h2 class="c-ttl">News</h2>

            <dl class="p-home-blog__group">

            <?php
                    $args = array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'posts_per_page' => 12
                ); ?>

            <?php query_posts($args); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="p-home-blog__link">
                <div class="p-home-blog__item">
                        <dt class="p-home-blog__top">
                            <img src="<?php the_field( 'アイキャッチ' ); ?>" alt="" class="p-home-blog__image">
                            <span class="p-home-blog__category">
                                <?php
                                $category = get_the_category(); 
                                echo $category[0]->cat_name;
                                ?></span>
                        </dt>
                        <dd class="p-home-blog__bottom">
                            <span class="p-home-blog__date"><?php echo get_the_date(); ?></span>
                            <h2 class="p-home-blog__ttl"><?php the_title(); ?></h2>
                            <p class="p-home-blog__txt">
                            <?php
                                if(mb_strlen(get_field('概要'))>100){
                                $text= mb_substr(strip_tags(get_field('概要')), 0, 100);
                                echo $text.'…';
                                }else{
                                echo strip_tags(get_field('概要'));
                                }?></p>
                        </dd>
                </div>
            </a>

            <?php endwhile; ?><?php endif; ?>
           
            </dl>

            </div>
            </section>
            <!--blog-->


            <!--page-navi	-->
            <div class="pager">
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
            <!--page-navi	-->


            </div>
            </section>
            <!--fv-->

<?php get_footer(); ?>
	

	
	