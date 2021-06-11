<?php $catID = 4; // id категории hot = 12, id категории development = 4
$countcat = get_category($catID, false); ?>

<div class="hot-vacancy-slider">
    <div class="hot-vacancy-slider__title">
        <div class="hot-vacancy-slider__title-wrap">
            <div class="hot-vacancy-slider__title-img"></div>
            <h3 class="hot-vacancy-slider__title-title">Горящие вакансии <?php echo $countcat->count ?></h3>
        </div>
        <?php if ($countcat->count >= 4) { ?>
            <div class="hot-vacancy-slider__title-buttons"></div>
        <?php } ?>
    </div>
    <div class="hot-vacancy-slider__slider">
        <?php
        $postList = get_posts(array('category' => $catID, 'numberposts' => 100));
        $newPostList = array_chunk($postList, 3);
        foreach ($newPostList as $postTop) { ?>
            <div class="hot-vacancy-slider__slide">
                <?php foreach ($postTop as $post) { ?>
                    <div class="hot-vacancy-slider__slide-card">
                        <a href="<?php the_permalink() ?>" class="hot-vacancy-slider__slide-card">
                            <div class="hot-vacancy-slider__slide-card_top">
                                <h4 class="hot-vacancy-slider__slide-card_position"> <?php trim_title_chars(100,'...') ?></h4>
                                <div class="hot-vacancy-slider__slide-card_logo"></div>
                            </div>
                            <div class="hot-vacancy-slider__slide-exp">Опыт: <span>от 3 до 6 лет</span></div>
                            <div class="hot-vacancy-slider__slide-card_bottom">
                                <div class="hot-vacancy-slider__slide-card_location">Рязань, офис</div>
                                <?
                                $industry = get_field('industry');
                                if($industry)
                                    echo '<div class="hot-vacancy-slider__slide-card_offer">'.$industry.'</div>';
                                ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php }
        ?>
    </div>
</div>
<!-- /.hot-vacancy-slider -->



<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick-1.8.1/slick/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/hot-vacancy-slider.js"></script>
