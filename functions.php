<?php

function usetech_setup() {
    // перевод WP
    load_theme_textdomain ('usetech');
    
    // добавляем заголовок страницы
    add_theme_support('title-tag');
    
    //загрузка логотипа через панель (ну мало-ли понадобиться)
    add_theme_support('custom-logo', array(
        'width' => 134, 
        'height' => 31, 
        'flex-height' => true 
    ));
    
    
    
    // добавляем html5 для форм
    add_theme_support('html5', array(
        'search_form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
    
    // регистируем поддержку меню
    register_nav_menu('primary', 'Primary menu');
    
    
    
    
}

add_action('after_setup_theme', 'usetech_setup');

//ограничение количества символов в заголовке категории "Вакансии"
function trim_title_chars($count, $after) {
  $title = get_the_title();
  if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
  else $after = '';
  echo $title . $after;
}

//вывод хлебных крошек на странице
//function the_breadcrumb() {
//    if (!is_front_page()) {
//        echo '<a href="';
//        echo get_option('home');
//        echo '">Главная';
//        echo "</a> &nbsp;&nbsp;/&nbsp;&nbsp; ";
//        if (is_category() || is_single()) {
//            the_category(' ');
//            if (is_single()) {
//                echo "&nbsp;&nbsp;/&nbsp;&nbsp; ";
//                the_title();
//            }
//        } elseif (is_page()) {
//            echo the_title();
//        }
//    }
//    else {
//        echo 'Home';
//    }
//}


//ВЫВОД ПЕРВОЙ КАРТИНКИ С ПОСТА
function first_post_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){
        $first_img = "/wp-content/themes/usetech/images/noimages.jpg";
// УКАЖИТЕ ПУТЬ К ИЗОБРАЖЕНИЮ, КОТОРОЕ БУДЕТ ВЫВОДИТСЯ ПО УМОЛЧАНИЮ.
    }
    return $first_img;
}


//Хлебные крошки
function usetech_the_breadcrumb(){
    global $post;
    if(!is_home()){
        echo '<li><a href="'.site_url().'">Главная</a></li> <li> > </li> ';
        if(is_single()){ // posts
            the_category(', ');
            echo " <li> > </li> ";
            echo '<li>';
            the_title();
            echo '</li>';
        }
        elseif (is_page()) { // pages
            if ($post->post_parent ) {
                $parent_id  = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                    $parent_id  = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                foreach ($breadcrumbs as $crumb) echo $crumb . '<li> > </li> ';
            }
            echo the_title();
        }
        elseif (is_category()) { // category
            global $wp_query;
            $obj_cat = $wp_query->get_queried_object();
            $current_cat = $obj_cat->term_id;
            $current_cat = get_category($current_cat);
            $parent_cat = get_category($current_cat->parent);
            if ($current_cat->parent != 0)
                echo(get_category_parents($parent_cat, TRUE, ' <li> > </li> '));
            single_cat_title();
        }
        elseif (is_search()) { // search pages
            echo 'Результаты поиска "' . get_search_query() . '"';
        }
        elseif (is_tag()) { // tags
            echo single_tag_title('', false);
        }
        elseif (is_day()) { // archive (days)
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> <li> > </li> ';
            echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> <li> / </li> ';
            echo get_the_time('d');
        }
        elseif (is_month()) { // archive (months)
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> <li> > </li>';
            echo get_the_time('F');
        }
        elseif (is_year()) { // archive (years)
            echo get_the_time('Y');
        }
        elseif (is_author()) { // authors
            global $author;
            $userdata = get_userdata($author);
            echo '<li>Posted ' . $userdata->display_name . '</li>';
        } elseif (is_404()) { // if page not found
            echo '<li>Страница не найдена (404)</li>';
        }

        if (get_query_var('paged')) // number of page
            echo ' (' . get_query_var('paged').'- страница)';

    } else { // home
        $pageNum=(get_query_var('paged')) ? get_query_var('paged') : 1;
        if($pageNum>1)
            echo '<li><a href="'.site_url().'"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li> <li> > </li> <li> '.$pageNum.'- страница </li>' ;
        else
            echo '<li><i class="fa fa-home" aria-hidden="true"></i>Home</li>';
    }
}


// Пагинация

function usetech_pagination( $args = array() ) {

    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( '&laquo;', 'text-domain' ),
        'next_string'     => __( '&raquo;', 'text-domain' ),
        'before_output'   => '<div class="navigation-page"><ul class="pagination">',
        'after_output'    => '</ul></div>'
    );

    $args = wp_parse_args(
        $args,
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );

    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );

    if ( $count <= 1 )
        return FALSE;

    if ( !$page )
        $page = 1;

    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }

    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );


    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';

    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }

    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';


    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}




// правильный способ подключить стили и скрипты
function usetech_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js' );
	wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/mask.js' );
	wp_enqueue_script( 'file', get_template_directory_uri() . '/js/file.js' );
    
}

add_action( 'wp_enqueue_scripts', 'usetech_scripts' );




add_filter( 'excerpt_length', function(){
    return 11;
} );
add_filter('excerpt_more', function($more) {
    return '...';
});

add_filter( "the_excerpt", "add_class_excerpt" );
function add_class_excerpt( $excerpt ) {
    return str_replace( '<p>', '<p class="news-list">', $excerpt );
}

//добавляем thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(320,180);


//remove_filter('the_excerpt', 'wpautop');


