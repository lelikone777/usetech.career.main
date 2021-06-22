<?php get_header(); ?>

    <!--Вывод хлебных крошек-->
<?php get_template_part('template-parts/breadcrumbs');?>

   
<div class="vacancy-boxes">
    <section class="vacancy">
        <div class="site__container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 category-info">
                            <h1><?php single_cat_title(); ?></h1>
                            <?php echo category_description( $category_3 ); ?>
                        </div>
                    </div>
                  
                        
                            
                    <div class="vacancy-item">
                        <div class="row">
                         
                         <?php
                            $args=array(
                            'category__in' => 13, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                            'showposts'=>20, //сколько показать статей
                            'orderby'=>data, //сортировка по дате
                            'caller_get_posts'=>1);
                            $my_query = new wp_query($args);
                            if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>


                            <div class="col-lg-4">    
                                <a href="<?php the_permalink(); ?>">
                                    <div>
<!--                                        <img src="{category-icon}" alt="">-->
                                        <?php // the_title(); ?>
                                        <?php trim_title_chars(33, '...'); ?>
                                    </div>
                                </a>
                            </div>
                            <?php } }
                            wp_reset_query(); ?>

                        </div>
                    </div>
                            

                </div>
            </div>
        </div>

    </section>
</div>





<?php get_footer(); ?>