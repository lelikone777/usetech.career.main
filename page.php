<?php
/*
 * Template Name: Шаблон новостей
 * Template Post Type: post, page, product
 */
?>

<?php get_header(); ?>


<!-- main -->
<div id="main">
    <?php /* get_sidebar(); */ ?>
    <div id="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post post__box" id="post-<?php the_ID(); ?>">

                <!--Вывод хлебных крошек-->
                <?php get_template_part('template-parts/breadcrumbs');?>


                <!--ттут што-то другое-->



                <section class="update">
                    <div class="site__container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header__news">
                                    <h1><?php the_title(); ?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="fullstory-story">
                            <div class="row">
                                <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                                    <div class="fullstory-box story">
                                        <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                                        <div class="fullstory-social">
                                            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                            <script src="https://yastatic.net/share2/share.js"></script>
                                            <div class="ya-share2" data-services="vkontakte,facebook,twitter"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>







                <!--Отклик на вакансию-->
                <!-- Modal -->
                <div class="modal fade" id="offer" tabindex="-1" role="dialog" aria-labelledby="offer">
                    <div class="modal-dialog modal-lg" role="document">
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
