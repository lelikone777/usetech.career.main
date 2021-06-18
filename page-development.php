<?php wp_head(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet/less" type="text/css" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/css/new_less/all.less"/>-->
<!--<link rel="stylesheet/less" type="text/css" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/css/rt_less/all.less"/>-->
<link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/career_less/all.less"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/less.js" type="text/javascript"></script>


<body>
    <?php include 'template-parts/header-new.php'?>
    <?php include 'template-parts/vacancy_filter.php'?>
    <?php include 'template-parts/news-block.php'?>
</body>


<?php wp_footer(); ?>
