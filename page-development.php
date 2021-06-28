<?php wp_head(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/career_css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



<body class="development">
    <?php include 'template-parts/header-new.php'?>
    <?php include 'template-parts/vacancy_filter.php'?>
    <?php include 'template-parts/single-vacancy.php'?>
    <?php include 'template-parts/footer-new.php'?>
</body>


<?php wp_footer(); ?>
