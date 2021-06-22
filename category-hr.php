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
                            <h1>Вакансии в категории <span class="header-green"><?php single_cat_title(); ?></span></h1>
                            <?php echo category_description( $category_3 ); ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="search-box">
                            <?php if ( function_exists( 'cherry_get_search_form' ) ) { cherry_get_search_form(); } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <section class="vacancy-tab">
                        <ul class="nav nav-pills nav-vert">
                          <li role="presentation"><a href="/vacancy/">Все</a></li>
                          <li role="presentation"><a href="/vacancy/develop/">Разработка</a></li>
                          <li role="presentation"><a href="/vacancy/testing/">Тестирование</a></li>
                          <li role="presentation"><a href="/vacancy/analysis/">Системный / Бизнес Анализ</a></li>
                          <li role="presentation"><a href="/vacancy/design/">Дизайн</a></li>
                          <li role="presentation"><a href="/vacancy/promote/">Развитие</a></li>
                          <li role="presentation" class="active"><a href="/vacancy/hr/">Работа с персоналом</a></li>
                          <li role="presentation"><a href="/vacancy/pm/">Управление проектами</a></li>
                        </ul>
                    </section>


                            
                    <div class="vacancy-item">
                        <div class="row">
                         
                         <?php
                            $args=array(
                            'category__in' => 9, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
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

                                    <div class="short-city">
                                        <div class="vacancy-exp">
                                            <strong>Опыт:</strong>
                                            <?php
                                            if(get_field('experience')){
                                                echo get_field('experience');
                                            }
                                            ?>
                                        </div>
                                        <div class="vacancy-city">
                                            <?php
                                            if(get_field('city')){
                                                echo get_field('city');
                                            }
                                            ?>
                                        </div>
                                        <?php
                                        if ( in_category( '12' )) {
                                            echo "<img src='https://career.usetech.ru/wp-content/themes/usetech/images/flame.svg'>";
                                        }
                                        ?>
                                    </div>
                                </a>
                            </div>
                            <?php } }
                            wp_reset_query(); ?>

                        </div>
                    </div>
                            
                            
                        
                        
                            
                            
                    
                            
                            
                        
                      
                    
                    
                    
                    
                    
                    

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="none-vacancy">
                                <span>Не нашли для себя подходящей вакансии? <a href="/contacts/#feedback-form">Напишите нам</a></span>
                                <a href="#" class="btn btn-success btn-top btn-pad">Смотреть все вакансии</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>





<?php get_footer(); ?>