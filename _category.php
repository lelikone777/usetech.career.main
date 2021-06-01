<?php get_header(); ?>


    <!--Вывод хлебных крошек-->
<?php get_template_part('template-parts/breadcrumbs');?>

   
<div class="vacancy-boxes">
    <section class="vacancy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 category-info">
                            <h1><?php single_cat_title(); ?></h1>
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
<!--
                       <div class="toggle-vacancy">
                       
                       <div class="panel panel-default collapsed" data-toggle="collapse" data-target="#category-vacancy" aria-expanded="false">
                           <span class="pull-left">Выберите категорию</span>
                           <span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                           <div class="clearfix"></div>
                       </div>                       
                      </div>
-->
                       
                       
                        <ul class="nav nav-pills nav-vert">
                          <li role="presentation" class="active"><a href="/vacancy/">Все</a></li>
                          <li role="presentation"><a href="/vacancy/develop/">Разработка</a></li>
                          <li role="presentation"><a href="/vacancy/testing/">Тестирование</a></li>
                          <li role="presentation"><a href="/vacancy/analysis/">Системный / Бизнес Анализ</a></li>
                          <li role="presentation"><a href="/vacancy/design/">Дизайн</a></li>
                          <li role="presentation"><a href="/vacancy/promote/">Развитие</a></li>
                          <li role="presentation"><a href="/vacancy/hr/">Работа с персоналом</a></li>
                          <li role="presentation"><a href="/vacancy/pm/">Управление проектами</a></li>
                        </ul>
                       
                    </section>


<!--                    <section class="hot">-->
<!--                        <div class="container">-->
<!--                            <div class="row">-->
<!--                                <div class="col-lg-12">-->
<!--                                    <div class="hot-box">-->
<!--                                        <h3><img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/flame.svg" alt="">Горячие вакансии:</h3>-->
<!--                                        <div class="vacancy-item">-->
<!--                                            <div class="row">-->
<!---->
<!--                                                --><?php
//                                                $args=array(
//                                                    'category__in' => 12, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
//                                                    'showposts'=>3, //сколько показать статей
//                                                    'orderby'=>data, //сортировка по дате
//                                                    'caller_get_posts'=>1);
//                                                $my_query = new wp_query($args);
//                                                if( $my_query->have_posts() ) {
//                                                    while ($my_query->have_posts()) {
//                                                        $my_query->the_post();
//                                                        ?>
<!---->
<!---->
<!--                                                        <div class="col-lg-4">-->
<!--                                                            <a href="--><?php //the_permalink(); ?><!--">-->
<!--                                                                <div>-->
<!--                                                                    <!--                                        <img src="{category-icon}" alt="">-->
<!--                                                                    --><?php //// the_title(); ?>
<!--                                                                    --><?php //trim_title_chars(25, '...'); ?>
<!--                                                                </div>-->
<!---->
<!--                                                                <div class="short-city">-->
<!--                                                                    <i class="fa fa-map-marker"></i>-->
<!--                                                                    --><?php
//                                                                    if(get_field('city')){
//                                                                        echo get_field('city');
//                                                                    }
//                                                                    ?>
<!--                                                                    <i class="fa fa-cog"></i>-->
<!--                                                                    --><?php
//                                                                    if(get_field('experience')){
//                                                                        echo get_field('experience');
//                                                                    }
//                                                                    ?>
<!--                                                                </div>-->
<!--                                                            </a>-->
<!--                                                        </div>-->
<!--                                                    --><?php //} }
//                                                wp_reset_query(); ?>
<!---->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </section>-->
                    
                    
                    
                    
                  
                        
                            
                    <div class="vacancy-item">
                        <div class="row">
                         
                         <?php
                            $args=array(
                            'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                            'showposts'=>100, //сколько показать статей
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