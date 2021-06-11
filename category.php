<?php get_header(); ?>

    <link rel="stylesheet/less" type="text/css"
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/career_less/all.less"/>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/less.js" type="text/javascript"></script>


    <!--Вывод хлебных крошек-->
<?php get_template_part('template-parts/breadcrumbs'); ?>


    <div class="vacancy-boxes">
        <section class="vacancy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12 category-info">
                                <h1><?php single_cat_title(); ?></h1>
                                <?php echo category_description($category_3); ?>
                            </div>
                        </div>
                        <div class="row">
                        <div class='preloader-new'>
                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                  width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                  <rect x="0" y="13" width="4" height="5" fill="#A4C815">
                                  <animate attributeName="height" attributeType="XML"
                                  values="5;21;5"
                                  begin="0s" dur="0.6s" repeatCount="indefinite" />
                                  <animate attributeName="y" attributeType="XML"
                                  values="13; 5; 13"
                                  begin="0s" dur="0.6s" repeatCount="indefinite" />
                                  </rect>
                                  <rect x="10" y="13" width="4" height="5" fill="#A4C815">
                                  <animate attributeName="height" attributeType="XML"
                                  values="5;21;5"
                                  begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                                  <animate attributeName="y" attributeType="XML"
                                  values="13; 5; 13"
                                  begin="0.15s" dur="0.6s" repeatCount="indefinite" />
                                  </rect>
                                  <rect x="20" y="13" width="4" height="5" fill="#A4C815">
                                  <animate attributeName="height" attributeType="XML"
                                  values="5;21;5"
                                  begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                                  <animate attributeName="y" attributeType="XML"
                                  values="13; 5; 13"
                                  begin="0.3s" dur="0.6s" repeatCount="indefinite" />
                                  </rect>
                                  </svg>

                            </div>
                        </div>
                        

                        <div class="clareer-filter">


                            <div class="row">

<!--                                <div class="col-lg-3">-->
                                    <div class="col-lg-4 col-md-6">
                                    <label class="clareer-filter__label" for="">Город вакансии:</label>
                                    <select id="select">
                                        <option value="all">Все города</option>
                                    </select>
                                </div>

<!--                                <div class="col-lg-4">-->
                                    <div class="col-lg-4 col-md-6">
                                    <label class="clareer-filter__label" for="">Профиль вакансии:</label>
                                    <select id="select2">
                                        <option value="all">Все профили</option>
                                    </select>
                                </div>
<!--                                <div class="col-lg-5">-->
<!--                                    <div class="search-box">-->
<!--                                        <label class="clareer-filter__label" for="">Поиск вакансии:</label>-->
<!--                                        --><?php //if (function_exists('cherry_get_search_form')) {
//                                            cherry_get_search_form();
//                                        } ?>
<!--                                    </div>-->
<!--                                </div>-->

                            </div>
                        </div>



                        <div class="vacancy-item">
                            <div class="row">
                                <div class="message hidden">
                                    <div class="message__top"></div>
                                    <div class="message__bottom"></div>
                                </div>

                                <div class="list"></div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </div>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/career.js" type="text/javascript"></script>
<?php get_footer(); ?>
