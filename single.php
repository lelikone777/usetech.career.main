<?php get_header(); ?>


<!-- main -->
<div id="main">
    <?php /* get_sidebar(); */ ?>
    <div id="content">

        <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <!--
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
-->
        <div class="post post__box" id="post-<?php the_ID(); ?>">
            <!--Вывод хлебных крошек-->
            <?php get_template_part('template-parts/breadcrumbs'); ?>

            <?php
            $arExclude = [
                1176,
                1184
            ];

            if (!is_single($arExclude)) { ?>


            <div class="site__container">
                <section class="fullstory">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>

                    <!--                        <section class="vacancy-infobox">-->
                    <!--                            <div class="row">-->
                    <!--                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">-->
                    <!--                                    <div class="vacancy-info">-->
                    <!--                                        <div class="vacancy-info-content">-->
                    <!--                                            <img src="/wp-content/themes/usetech/images/vacancy/clock.svg" alt="">-->
                    <!--                                            --><?php
                    //                                            if (get_field('employment')) {
                    //                                                echo get_field('employment');
                    //                                            }
                    //                                            ?>
                    <!--                                        </div>-->
                    <!--                                        <span class="vacancy-info-title"> Тип занятости</span>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">-->
                    <!--                                    <div class="vacancy-info">-->
                    <!--                                        <div class="vacancy-info-content">-->
                    <!--                                            <img src="/wp-content/themes/usetech/images/vacancy/zan.svg" alt="">-->
                    <!--                                            --><?php
                    //                                            if (get_field('schedule')) {
                    //                                                echo get_field('schedule');
                    //                                            }
                    //                                            ?>
                    <!--                                        </div>-->
                    <!--                                        <span class="vacancy-info-title"> График работы</span>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!---->
                    <!--                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">-->
                    <!--                                    <div class="vacancy-info">-->
                    <!--                                        <div class="vacancy-info-content">-->
                    <!--                                            <img src="/wp-content/themes/usetech/images/vacancy/cog.svg" alt="">-->
                    <!--                                            --><?php
                    //                                            if (get_field('experience')) {
                    //                                                echo get_field('experience');
                    //                                            }
                    //                                            ?>
                    <!--                                        </div>-->
                    <!--                                        <span class="vacancy-info-title"> Опыт работы</span>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!---->
                    <!--                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">-->
                    <!--                                    <div class="vacancy-info">-->
                    <!--                                        <div class="vacancy-info-content">-->
                    <!--                                            <img src="/wp-content/themes/usetech/images/vacancy/map.svg" alt="">-->
                    <!--                                            --><?php
                    //                                            if (get_field('city')) {
                    //                                                echo get_field('city');
                    //                                            }
                    //                                            ?>
                    <!--                                        </div>-->
                    <!--                                        <span class="vacancy-info-title"> Город вакансии</span>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </section>-->


                </section>
            </div>

            <section class="fullstory vacancy-text">
                <div class="site__container">
                    <div class="row">
                        <div class="col-lg-4 col-xs-12 col-lg-push-8">
                            <div class="vacancy-right-info">
                                <ul>
                                    <?php if (get_field('city')) { ?>
                                        <li>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vacancy/map-marker.svg"
                                                 alt="Город вакансии Usetech">
                                            <?php echo get_field('city');
                                            ?>
                                        </li>
                                    <?php }
                                    if (get_field('experience')) { ?>
                                        <li>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vacancy/calendar.svg"
                                                 alt="">
                                            <?php echo get_field('experience')[label]; ?>
                                        </li>
                                    <?php }
                                    ?>


                                    <li>
                                        <?php
                                        if (get_field('employment')) {
                                            echo get_field('employment');
                                        }
                                        ?>,
                                        <?php
                                        if (get_field('schedule')) {
                                            echo get_field('schedule');
                                        }
                                        ?>
                                    </li>
                                    <?php if (get_field('work_remote')) { ?>
                                        <li>
                                            Удаленная работа
                                        </li>
                                    <?php }
                                    if (get_field('work_format')) { ?>
                                        <li>
                                            <?php echo get_field('work_format'); ?>
                                        </li>
                                    <?php }
                                    if (get_field('industry')) { ?>
                                        <li>
                                            <?php echo get_field('industry'); ?>
                                        </li>
                                    <?php }
                                    if (get_field('hot')) { ?>
                                        <li>
                                            Горячая вакансия
                                        </li>
                                    <?php }
                                    ?>
                                </ul>
                                <a href="#" data-toggle="modal" data-target="#offer" class="button button-primary">Откликнуться
                                    на вакансию</a>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-lg-pull-4">
                            <div class="fullstory-box story">
                                <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                            </div>
                        </div>

                    </div>

                    <!--                        <a href="#" data-toggle="modal" data-target="#offer" class="btn btn-success btn-top btn-pad">Откликнуться на вакансию</a>-->
                </div>
        </div>
        <!--                        допполя-->
    </div>
    </section>


    <section class="vacancy mb-180">
        <div class="site__container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <h2>Другие вакансии</h2>
                        </div>
                    </div>
                    <div class="vacancy-item">
                        <div class="row">

                            <!--                       insert related-->


                            <?php
                            $args = array(
                                'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                                'showposts' => 6, //сколько показать статей
                                'orderby' => rand, //сортировка по дате
                                'caller_get_posts' => 1);
                            $my_query = new wp_query($args);
                            if ($my_query->have_posts()) {
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
                                                <i class="fa fa-map-marker"></i>
                                                <?php
                                                if (get_field('city')) {
                                                    echo get_field('city');
                                                }
                                                ?>
                                                <i class="fa fa-cog"></i>
                                                <?php
                                                    // Переменные
                                                    $color = get_field('experience');
                                                    ?>
                                                <?php echo $color['label']; ?>
                                            </div>
                                        </a>
                                    </div>
                                <?php }
                            }
                            wp_reset_query(); ?>


                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="none-vacancy">
                                            <span>Не нашли для себя подходящей вакансии? <a
                                                        href="/contacts/#feedback-form">Напишите нам</a></span>
                                <a href="/vacancy/" class="button button-primary">Смотреть все
                                    вакансии</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                            <div class="col-lg-4 col-md-4 hidden-xs hidden-sm">-->
                <!--                                <div class="vacancy-image">-->
                <!--                                    <img src="/wp-content/themes/usetech/images/girls.png" alt="">-->
                <!--                                </div>-->
                <!--                            </div>-->
            </div>
        </div>
    </section>

<? } else { ?>

    <!--ттут што-то другое-->


    <!--                    <section class="update">-->
    <!--                        <div class="container">-->
    <!--                            <div class="row">-->
    <!--                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--                                    <h1>--><?php //the_title(); ?><!--</h1>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="fullstory-story">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">-->
    <!--                                        <div class="fullstory-box story">-->
    <!--                                            --><?php //the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </section>-->

<? } ?>


    <!--Отклик на вакансию-->
    <!-- Modal -->
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


    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <!-- 				<p class="postmetadata alt">
                        <small>
						<?php the_tags('Tags: ', ', ', '<br/>'); ?>
						This entry was posted
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
    /* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
						and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.

						<?php if (('open' == $post->comment_status) && ('open' == $post->ping_status)) {
        // Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post->comment_status) && ('open' == $post->ping_status)) {
        // Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post->comment_status) && !('open' == $post->ping_status)) {
        // Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post->comment_status) && !('open' == $post->ping_status)) {
        // Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php }
    edit_post_link('Edit this entry.', '', ''); ?>
				</small>
                </p>
-->

</div>

<?php /* comments_template(); */ ?>

<?php endwhile; else: ?>

    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>
</div>
<!-- end main -->

<?php get_footer(); ?>
