<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800;900&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/new/style/style.css">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.9.97/css/materialdesignicons.min.css">




    <link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/new_less/all.less"/>
    <link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/rt_less/all.less"/>
    <link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/career_less/all.less"/>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/less.js" type="text/javascript"></script>


</head>
<body>
    <?php include 'header-new.php' ?>
    <div style="height: 64px"></div>

    <?php include 'top_slider.php' ?>
    <?php include 'vacancy_filter.php' ?>
    <?php include 'news-block.php' ?>
    <?php include 'news-block.php' ?>



</body>
</html>

<?php wp_footer(); ?>
