<?php get_header(); ?>

<div class="site__container">
    <?php include 'template-parts/top_slider.php'?>
</div>
<div class="site__container">
    <section class="vacancy">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="section__title">Наши вакансии</h2>
                        <p class="section__title-text">Мы постоянно растем, а это значит, у нас есть потребность в новых и перспективных кадрах! Загляните в этот раздел, может быть, Вы тот, кто нам нужен.</p>
                    </div>
                </div>
                <div class="vacancy-item">
                    <div class="row flex">
                        <?php
                        $args=array(
                            'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                            'showposts'=>9, //сколько показать статей
                            'orderby'=>data, //сортировка по дате
                            'caller_get_posts'=>1);
                        $my_query = new wp_query($args);
                        if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <a href="<?php the_permalink(); ?>">
                                        <div>
                                            <h3 class="hidden-sm hidden-xs"><?php trim_title_chars(30, '...'); ?></h3>
                                            <h3 class="hidden-md hidden-lg"><?php the_title(); ?></h3>
                                        </div>
                                        <div class="short-city">
                                            <div class="vacancy-exp">
                                                <strong>Опыт:</strong>
                                                <?php
                                                if(get_field('experience')){
                                                    echo get_field('experience')[label];
                                                }
                                                ?>
                                            </div>
                                            <div class="vacancy-city">
                                                <?php
                                                if(get_field('city')){
                                                    echo get_field('city');
                                                }
                                                ?><?php
                                                if ( in_category( '20' )) {
//                                                echo ", '<a href='/vacancy/remote/'>' удаленно '</a>''";
                                                }
                                                ?>
                                            </div>
                                            <?php
                                            if ( in_category( '12' )) {
                                                echo "<img src='https://career.usetech.ru/wp-content/themes/usetech/images/flame.svg' title='Горящая вакансия, мы находимся в срочном поиске'>";
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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="none-vacancy">
                            <span>Не нашли для себя подходящей вакансии? <a href="/contacts/#feedback-form">Напишите нам</a></span>
                            <a href="/vacancy/" class="button button-secondary">Смотреть все вакансии</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="about-company">

    <section class="timeline__header">
        <div class="timeline__header-block">
            <div class="site__container">
                <h2>О компании</h2>
                <div class="timeline__header-block-desc">
                    <p>
                        Компания Usetech была основана в 2006 году, и за это время мы успешно реализовали и внедрили сотни проектов по разработке ПО на заказ. Мы предлагаем своим Заказчикам полный спектр услуг в области заказной разработки программного обеспечения, независимого тестирования и IT-консалтинга.
                    </p>
                    <p>
                        Стабильность, гибкость, прозрачность всех процессов проектирования, использование современных технологий, понимание ключевых бизнес-процессов наших клиентов, а также высокий уровень квалификации специалистов, позволяют Usetech выступать в качестве надежного IT – партнера
                    </p>
                </div>
                <div class="about__list">
                    <div class="about__list-item">
                        <div class="title title_big">2006</div>
                        <div class="text">год основания</div>
                    </div>
                    <div class="about__list-item">
                        <div class="title title_big">6 офисов</div>
                        <div class="text">открыто по всей России</div>
                    </div>
                    <div class="about__list-item">
                        <div class="title title_big">2000+</div>
                        <div class="text">реализованных проектов</div>
                    </div>
                    <div class="about__list-item">
                        <div class="title title_big">400+ чел.</div>
                        <div class="text">работают в нашей компании</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="history">
    <div class="site__container">
        <h2>История и достижения</h2>
        <p>Мы стремимся вверх, заботимся о наших сотрудниках и стремительно развиваемся во вне. За все время работы мы зарекомендовали себя как надежные партнеры и компания.</p>
    </div>
    <section class="timeline">
        <section class="timeline__body">
            <?php get_template_part('template-parts/timeline'); ?>
        </section>
    </section>
</section>

<?php include 'template-parts/command.php'?>

<?php include 'template-parts/news-block.php'?>

<?php get_footer(); ?>
