<section class="development">
<!--    <div class="site__container">-->
        <h2 class="development__title">Новости</h2>
        <div class="development__content">
            <div class="development__left">
                <?php global $post;

                $query = new WP_Query([
                    'posts_per_page' => 1,
                    'category_name' => 'news',
                    'post__in'  => get_option( 'sticky_posts' )
                ]);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>

                        <a href="<?php the_permalink() ?>" class="development__left-top">
                            <div class="development__left-top_wrap">
                                <div class="development__left-top_image"
                                     style="background-image: url(<?php echo first_post_image() ?>)"></div>
                            </div>

                            <h3 class="development__left-top_text">

                                <?php trim_title_chars(100,'...') ?>
                            </h3>
                            <h3 class="development__left-top_text--mobile">
                                <?php trim_title_chars(100,'...') ?>
                            </h3>
                        </a>


                        <?php
                    }
                } else {
                    ?> <p>Постов не найдено</p> <?php
                }
                wp_reset_postdata(); // Сбрасываем $post
                ?>


                <div class="development__left-bottom">


                    <?php
                    global $post;

                    $query = new WP_Query([
                        'offset' => 1,
                        'posts_per_page' => 4,
                        'category_name' => 'news',
                       'post__not_in' => get_option( 'sticky_posts' ),


                    ]);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>


                            <a href="<?php the_permalink() ?>" class="development__left-card">

                                <div class="development__left-card_wrap">
                                    <div class="development__left-card_image"
                                         style="background-image: url(<?php echo first_post_image() ?>)"></div>
                                </div>

                                <h3 class="development__left-card_text">
                                    <?php trim_title_chars(100,'...') ?>
                                </h3>
                            </a>
                            <!-- /.development__left-card -->
                            <?php
                        }
                    } else {
                        ?> <p>Постов не найдено</p> <?php
                    }
                    wp_reset_postdata(); // Сбрасываем $post
                    ?>
                </div>
                <!-- /.development__left-bottom -->
                <a href="https://career.usetech.ru/blog/news/" class="development__left-button">Посмотреть все
                    новости</a>
            </div>
            <!-- /.development__left -->


            <div class="development__right">
                <h3 class="development__right-title development__right-title_top">Cтатьи и выступления</h3>

                <div class="development__right-list">
                    <?php
                    global $post;

                    $query = new WP_Query([
                        'posts_per_page' => 5,
                        'category_name' => 'events',
                    ]);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $authors = get_field('speaker');
                            $place = get_field('publication_place')[0];
                            ?>
                            <a href="<?php the_permalink() ?>" class="development__right-post">


                                <?php if ($place) { ?>
                                    <span class="development__right-label">
                                        <?php echo  get_fields($place)[place_name]; ?>
                                    </span>
                                <?php }
                                ?>


                                <h4 class="development__right-title">
                                <span class="development__right-title_link"
                                > <?php trim_title_chars(100,'...') ?></span>
                                </h4>


                                <?php
                                $authorLength = count(get_field(('speaker')));
                                if ($authorLength > 2) {
                                    ?>

                                    <div class="development__right-info">
                                        <div class="development__right-info_avatar">
                                            <div class="development__right-info_avatar--3"></div>
                                        </div>
                                        <div class="development__right-info_wrap">
                                            <div class="development__right-info_name">Разные спикеры</div>
                                            <div class="development__right-info_position">
                                                Ведущие разработчики Usetech
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                } else {
                                    foreach ($authors as $i) { ?>
                                        <?php
                                        $authorLength = count(get_field(('speaker')));
                                        // фото автора
//                                        $thumbnail = get_the_post_thumbnail($i, array(48, 48));

                                        $thumbnail = get_fields($i)[author_avatar];

                                        $role = get_fields($i)[role]; // должность автора
                                        $name_author = get_the_title($i); // имя автора
                                        ?>


                                        <div class="development__right-info">
                                            <?php


                                            if ($thumbnail) {
                                                ?>
                                                <div class="development__right-info_avatar" style="background-image: url(<?php echo $thumbnail ?>)"> </div>
                                            <?php } ?>

                                            <div class="development__right-info_wrap">

                                                <div class="development__right-info_name"><?php echo $name_author ?></div>
                                                <div class="development__right-info_position"><?php echo $role ?></div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>

                            </a>
                            <!-- /.development__right-post -->


                            <?php
                        }
                    } else {
                        ?> <p>Постов не найдено</p> <?php
                    }
                    wp_reset_postdata(); // Сбрасываем $post
                    ?>


                </div>
            </div>
            <!-- /.development__right -->
            <a href="https://career.usetech.ru/blog/news/"
               class="development__left-button development__left-button--mobile">Посмотреть все новости</a>
        </div>
        <!-- /.development__content -->
<!--    </div>-->
    <!-- /.container -->
</section>