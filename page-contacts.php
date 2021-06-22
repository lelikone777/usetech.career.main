
<?php get_header(); ?>

<meta name="yandex-verification" content="fd4bb99f16c8692d"/>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <!--Вывод хлебных крошек-->
<?php get_template_part('template-parts/breadcrumbs');?>
<!--
<div class="container m-t-b-45">
        <div class="row">
            <div class="col-lg-12">
               <div class="speedbar">
                
                </div>
            </div>
        </div>
    </div>
-->



<!-- main -->
<div id="main">

<?php /* get_sidebar(); */ ?>

  <div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<section class="contacts-feedback"  id="feedback-form">
    <div class="site__container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <section class="feedback-form">
       <div class="site__container">
       <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Форма обратной связи</h3>
            <p class="feedback-notes">Поля, помеченные <span>*</span>, обязательны к заполнению</p>
        </div>
    </div>
       <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
        </div>
    </section>
    <section class="maps">
        <div class="maps-container">
            <div id="map" style="width: 100%; height: 600px"></div>
        </div>
        <div class="maps-feedback">
            <div style="width:100%;height:500px;overflow:hidden;position:relative;"><iframe style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box" src="https://yandex.ru/maps-reviews-widget/132741806463?comments"></iframe><a href="https://yandex.ru/maps/org/usetech/132741806463/" target="_blank" style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0">Usetech на карте Москвы — Яндекс.Карты</a></div>
        </div>
    </section>
</section>
			
				

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    
  </div>
</div>
<!-- end main -->

    <script>
        ymaps.ready(function() {
            var myMap = new ymaps.Map('map', {
                    center: [55.729224, 37.645402],
                    zoom: 17
                },
                {
                    searchControlProvider: 'yandex#search'
                }),
                placemyMap = new ymaps.Placemark(myMap.getCenter(), {
                    hintContent: 'Usetech',
                    balloonContent: 'Usetech, Москва, Кожевническая улица, 10с1'
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: 'https://career.usetech.ru/wp-content/themes/usetech/images/map-marker.svg',
                    // Размеры метки.
                    iconImageSize: [52, 76],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-30, -57]
                });

            myMap.geoObjects.add(placemyMap);
            myMap.behaviors.disable('scrollZoom');
        });
    </script>

<?php get_footer(); ?>