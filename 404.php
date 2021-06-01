<?php get_header(); ?>


<!--Вывод хлебных крошек-->
<?php get_template_part('template-parts/breadcrumbs');?>

<div class="container">
    <section class="page-404">
        <div class="container">
            <div class="col-lg-12 text-center">
                <div class="page-404-bg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/404.svg" alt="Страница не найдена" title="Страница не найдена">
                </div>
                <p>К сожалению, искомая страница не найдена :(</p>
                Но вы можете <a href="/vacancy/">посмотреть вакансии</a> или <a href="/">перейти на главную страницу</a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

