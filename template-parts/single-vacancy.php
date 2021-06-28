<!--5574-->
<!--2206-->
<!--4417-->
<!--2001-->

<div class="div">
    <?php
        $postId = 4417;
        $post = get_post($postId);
        $profile =  get_field('profile')[value];

    ?>
</div>
<section class="vacancy">

    <div class="vacancy__side-card--mobile_btn">
        <a href="#" data-toggle="modal" data-target="#offer" class="btn-green vacancy__side-card-button vacancy__side-card-button--mobile">Откликнуться
            на вакансию</a>
    </div>
    <div class="site__container">
        <h1 class="vacancy__title"><?php the_title(); ?></h1>
    </div>

    <div class="vacancy__side-card--mobile">
        <?php include 'vacancy-side-card.php'?>
    </div>

    <div class="site__container">
        <div class="vacancy__wrap">
            <div class="vacancy__wrap-top">
                <div class="vacancy__side">
                    <?php include 'vacancy-side-card.php'?>
                    <?php include 'vacancy-callback-card.php'?>
                </div>
                <div class="vacancy__main">
                    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                </div>
            </div>
        </div>
    </div>
        <div class="vacancy__callback--mobile">
            <div class="site__container">
                <?php include 'vacancy-callback-card.php'?>
            </div>
        </div>

        <div class="vacancy__others">
            <div class="site__container">
                <h2 class="vacancy__others-title" >Похожие вакансии:</h2>
                <div class="vacancy__others-wrap">

                <?php
                    $args = array(
                        'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                        'showposts' => 3, //сколько показать статей
                        'post__not_in' => [$postId], // исключаем текущий пост
                        'meta_query'	=> array(
                            array(
                                'key'		=> 'profile', // ищем по ключу профиль
                                'compare'	=> '=',
                                'value' => $profile, // подставляем значения для ключа из текущего поста
                            ),
                        )

                    );


                    // запрос
                    $query = new WP_Query( $args );

                    ?>
                    <?php if ( $query->have_posts() ) : ?>

                        <!-- пагинация -->

                        <!-- цикл -->
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                            <a class="vacancy__others-card" href="<?php the_permalink(); ?>">

                                <div class="vacancy__others-card_title">
                                    <?php trim_title_chars(100, '...'); ?>
                                </div>
                                <div class="vacancy__others-card_excerpt">
                                    <?php echo wp_trim_words(get_field('short_description'), 30); ?>
                                </div>
                                <!--                            //проверяем на "город" -->
                                <?php if (get_field('city')) { ?>
                                    <div class="vacancy__side-card_city vacancy__others-card_city">
                                        <div class="vacancy__side-card_city-text vacancy__others-card_city-text"><?php echo get_field('city'); ?>, офис</div>
                                        <div class="vacancy__side-card_city-subtext vacancy__others-card_city-subtext">вакансия не подразумевает удаленной работы и необходим выход в офис в данном городе</div>
                                    </div>
                                <?php } else { ?>
                                    <div class="vacancy__side-card_city vacancy__others-card_city">
                                        <div class="vacancy__side-card_city-text vacancy__others-card_city-text">Любой город, удаленно</div>
                                        <div class="vacancy__side-card_city-subtext vacancy__others-card_city-subtext">но можно работать и в офисе: Москва, Ростов-на-Дону, Томск, Барнаул</div>
                                    </div>
                                <?php }?>

                                <div class="vacancy__others-card_bottom">
                                    <!--                            //проверяем на "опыт"  -->
                                    <?php if (get_field('experience')) { ?>
                                        <div class="vacancy__side-card_exp vacancy__others-card_exp">
                                            <div class="vacancy__side-card_exp-text vacancy__others-card_exp-text"><span>Опыт: </span> <?php echo get_field('experience')[label]; ?></div>
                                        </div>
                                    <?php } ?>
                                    <!--                            //проверяем на "занятость" -->
                                    <?php
                                    if (get_field('employment')) { ?>
                                        <div class="vacancy__side-card_employment vacancy__others-card_employment"> <?php echo get_field('employment'); ?> </div>
                                    <?php } ?>
                                    <?php if (get_field('industry')) { ?>
                                        <div class="industry vacancy__side-card_industry vacancy__others-card_industry">
                                            <?php echo get_field('industry'); ?>
                                        </div>
                                    <?php } ?>
                                </div>

                            </a>



                        <?php endwhile; ?>
                        <!-- конец цикла -->

                        <!-- пагинация -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
                    <?php endif; ?>

             </div>
    </div>
</section>
    <div class="modal fade" id="offer" tabindex="-1" role="dialog" aria-labelledby="offer">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Отклик на вакансию <span
                                class="header-green"><?php the_title(); ?></span></h4>
                    <p class="feedback-notes">Поля, помеченные <span>*</span>, обязательны к заполнению.</p>
                </div>
                <div class="modal-body">
                    <div class="modal-form">

                        <?php echo do_shortcode('[contact-form-7 id="785" title="Форма из вакансии_3поля"]'); ?>


                    </div>
                </div>

            </div>
        </div>
    </div>

