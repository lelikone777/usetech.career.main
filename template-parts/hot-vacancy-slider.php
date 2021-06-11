<?php $catID = 4; // id категории hot = 12, id категории development = 4
$countcat = get_category($catID, false); ?>

<div class=" hot-vacancy-slider">
    <div class="hot-vacancy-slider__title">
        <div class="hot-vacancy-slider__title-wrap">
            <div class="hot-vacancy-slider__title-img"></div>
            <h3 class="hot-vacancy-slider__title-title">Горящие вакансии <?php echo $countcat->count ?></h3>
        </div>
        <?php if ($countcat->count >= 4) { ?>
            <div class="hot-vacancy-slider__title-buttons"></div>
        <?php } ?>
    </div>

    <div class="top-slider__loader-wrap"
         style="display: flex; height: auto; min-height: 260px; align-items: center; justify-content: center">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;"
             xml:space="preserve">
                              <rect x="0" y="13" width="4" height="5" fill="#A4C815">
                                  <animate attributeName="height" attributeType="XML"
                                           values="5;21;5"
                                           begin="0s" dur="0.6s" repeatCount="indefinite"/>
                                  <animate attributeName="y" attributeType="XML"
                                           values="13; 5; 13"
                                           begin="0s" dur="0.6s" repeatCount="indefinite"/>
                              </rect>
            <rect x="10" y="13" width="4" height="5" fill="#A4C815">
                <animate attributeName="height" attributeType="XML"
                         values="5;21;5"
                         begin="0.15s" dur="0.6s" repeatCount="indefinite"/>
                <animate attributeName="y" attributeType="XML"
                         values="13; 5; 13"
                         begin="0.15s" dur="0.6s" repeatCount="indefinite"/>
            </rect>
            <rect x="20" y="13" width="4" height="5" fill="#A4C815">
                <animate attributeName="height" attributeType="XML"
                         values="5;21;5"
                         begin="0.3s" dur="0.6s" repeatCount="indefinite"/>
                <animate attributeName="y" attributeType="XML"
                         values="13; 5; 13"
                         begin="0.3s" dur="0.6s" repeatCount="indefinite"/>
            </rect>
            </svg>
    </div>
    <div class="slider-wrap">
        <div class="hot-vacancy-slider__slider"></div>
    </div>

</div>
<!-- /.hot-vacancy-slider -->


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick-1.8.1/slick/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/hot-vacancy-slider.js"></script>
