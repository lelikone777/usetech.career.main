
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
                            <h1><?php printf( __( 'Результаты поиска: <span class="header-green">%s</span>', 'usetech' ), '' . get_search_query() . '' ); // Динамический заголовок поиска?></h1>
                            
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                            
                            <div class="vacancy-item">
                            
                        <div class="row">
                         
                         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>


                            <div class="col-lg-4">    
                                <a href="<?php the_permalink(); ?>">
                                    <div>
                                        <?php trim_title_chars(33, '...'); ?>
                                    </div>

                                    <div class="short-city"> 
                                        <i class="fa fa-map-marker"></i> 
                                        <?php
                                            if(get_field('city')){
                                                echo get_field('city');
                                            }
                                        ?>
                                        <i class="fa fa-cog"></i> 
                                        <?php
                                            if(get_field('experience')){
                                                echo get_field('experience');
                                            }
                                        ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; // Конец цикла ?> 

                        </div>
                    </div>
                            
                          
                           <div class="row">
                              <div class="col-lg-12">
                                   <div class="pagination">
                                        <?php // Пагинация
                                    global $wp_query;
                                    $big = 999999999;
                                    echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                        'format' => '?paged=%#%',
                                        'current' => max( 1, get_query_var('paged') ),
                                        'type' => 'list',
                                        'prev_text'    => __('« Назад'), 
                                        'next_text'    => __('Вперед »'),
                                        'total' => $wp_query->max_num_pages
                                    ) );
                                    ?>
                                    </div>
                               </div> 
                           </div>
                        
                        
                            
                            
                   
                            
                            
                        
                 
                    
                    
                    
                    
                    
                    

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="none-vacancy">
                                <span>Не нашли для себя подходящей вакансии? <a href="/contacts/#feedback-form">Напишите нам</a></span>
                                <a href="/vacancy/" class="button button-primary">Смотреть все вакансии</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
    
    
    
    
    
    
    
    
    
    
    





<?php get_footer(); ?>