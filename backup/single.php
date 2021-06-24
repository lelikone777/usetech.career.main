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
                <h1 class="vacancy__title"><?php the_title(); ?></h1>
                <div class="vacancy__wrap">
                    <div class="vacancy__side">
                        <div class="vacancy__side-card">
                                <?php if (get_field('city')) { ?>
                                    <div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vacancy/map-marker.svg"
                                             alt="Город вакансии Usetech">
                                        <?php echo get_field('city');
                                        ?>
                                    </div>
                                <?php }
                                if (get_field('experience')) { ?>
                                    <div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vacancy/calendar.svg"
                                             alt="">
                                        <?php echo get_field('experience')[label]; ?>
                                    </div>
                                <?php }
                                ?>
                                <div>
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
                                </div>
                                <?php if (get_field('work_remote')) { ?>
                                    <div>
                                        Удаленная работа
                                    </div>
                                <?php }
                                if (get_field('work_format')) { ?>
                                    <div>
                                        <?php echo get_field('work_format'); ?>
                                    </div>
                                <?php }
                                if (get_field('industry')) { ?>
                                    <div>
                                        <?php echo get_field('industry'); ?>
                                    </div>
                                <?php }
                                if (get_field('hot')) { ?>
                                    <div>
                                        Горячая вакансия
                                    </div>
                                <?php }
                                ?>

                            <a href="#" data-toggle="modal" data-target="#offer" class="button button-primary">Откликнуться
                                на вакансию</a>
                        </div>
                        <div id="star-frame" class="vacancy__side-frame">
                            <div class="vacancy__side-frame_text">
                                работать можно удаленно или в офисе: Москва, Ростов-на-Дону, Томск, Барнаул
                            </div>
                        </div>
                    </div>
                    <div class="vacancy__main">
                        <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                        <div class="vacancy__callback">
                            <div class="vacancy__callback-text">
                                Если Вы не нашли подходящую вакансию, пожалуйста, пришлите Ваше резюме, мы обязательно подберем для Вас работу мечты.
                            </div>
                            <a href="#" data-toggle="modal" data-target="#offer" class="btn-green vacancy__callback-button">Прислать резюме</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<? } else { ?>
<? } ?>

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
