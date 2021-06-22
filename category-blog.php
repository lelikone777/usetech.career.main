<?php get_header(); ?>
    <div class="vacancy-boxes vacancy-boxes-news">
    <section class="vacancy">
        <div class="site__container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!--Вывод хлебных крошек-->
                        <?php get_template_part('template-parts/breadcrumbs');?>
                        <!--Вывод хлебных крошек-->
                        <div class="col-lg-12 category-info">
                            <h1><?php single_cat_title(); ?></h1>
                            <?php echo category_description( $category_3 ); ?>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="row wrap">
                        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <a href="<?php the_permalink(); ?>">
                                    <div>
                                        <div class="news-item-img" style="background-image: url(<?php echo first_post_image() ?>)"></div>
<!--                                        <img src="--><?php //echo first_post_image() ?><!--" alt="--><?php //the_title(); ?><!--" />-->
                                        <h3><?php trim_title_chars(50, '...'); ?></h3>
                                        <?php the_excerpt(); ?>
                                        <span class="button button-primary">Читать далее</span>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; // Конец цикла ?>
                        </div>
                    </div>
                    <div class="paginations">
                        <!--Вывод пагинации-->
                        <?php usetech_pagination(); ?>
                        <!--Вывод пагинации-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
