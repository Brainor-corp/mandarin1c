<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */

add_theme_support('title-tag');

register_nav_menus(array(
	'top' => 'Верхнее',
	'bottom' => 'Внизу',
	'top-header' => 'В шапке'
));

require_once('bs4navwalker.php');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 150);
add_image_size('big-thumb', 400, 400, true);

register_sidebar(array(
	'name' => 'Сайдбар',
	'id' => "sidebar",
	'description' => 'Обычная колонка в сайдбаре',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>\n",
	'before_title' => '<span class="widgettitle">',
	'after_title' => "</span>\n",
));

if (!class_exists('clean_comments_constructor')) { // если класс уже есть в дочерней теме - нам не надо его определять
    class clean_comments_constructor extends Walker_Comment { // класс, который собирает всю структуру комментов
        public function start_lvl( &$output, $depth = 0, $args = array()) { // что выводим перед дочерними комментариями
            $output .= '<ul class="children">' . "\n";
        }
        public function end_lvl( &$output, $depth = 0, $args = array()) { // что выводим после дочерних комментариев
            $output .= "</ul><!-- .children -->\n";
        }
        protected function comment( $comment, $depth, $args ) { // разметка каждого комментария, без закрывающего </li>!
            $classes = implode(' ', get_comment_class()).($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : ''); // берем стандартные классы комментария и если коммент пренадлежит автору поста добавляем класс author-comment
            echo '<li id="li-comment-'.get_comment_ID().'" class="'.$classes.' list-group-item ">'."\n"; // родительский тэг комментария с классами выше и уникальным id
            echo '<div id="comment-'.get_comment_ID().'">'."\n"; // элемент с таким id нужен для якорных ссылок на коммент
//            echo get_avatar($comment, 64)."\n"; // покажем аватар с размером 64х64
            echo '<p class="meta"><span id="coment_author">'.get_comment_author()."</span> | "; // имя автора коммента
            echo '<span id="coment_date">'.get_comment_date('F j, Y').' в '.get_comment_time()."</span></p>"; // дата и время комментирования
            if ( '0' == $comment->comment_approved ) echo '<em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>'."\n"; // если комментарий должен пройти проверку
            comment_text()."\n"; // текст коммента
//            $reply_link_args = array( // опции ссылки "ответить"
//                'depth' => $depth, // текущая вложенность
//                'reply_text' => 'Ответить', // текст
//                'login_text' => 'Вы должны быть залогинены' // текст если юзер должен залогинеться
//            );
//            echo get_comment_reply_link(array_merge($args, $reply_link_args)); // выводим ссылку ответить
            echo '</div>'."\n"; // закрываем див
        }
        public function end_el( &$output, $comment, $depth = 0, $args = array() ) { // конец каждого коммента
            $output .= "</li><!-- #comment-## --><hr class='line'>\n";
        }
    }
}

if (!function_exists('pagination')) {
	function pagination() {
		global $wp_query;
		$big = 999999999;
		$links = paginate_links(array(
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'type' => 'array',
			'prev_text'    => 'Назад',
	    	'next_text'    => 'Вперед',
			'total' => $wp_query->max_num_pages,
			'show_all'     => false,
			'end_size'     => 15,
			'mid_size'     => 15,
			'add_args'     => false,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		));
	 	if( is_array( $links ) ) {
		    echo '<ul class="pagination">';
		    foreach ( $links as $link ) {
		    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>";
		        else echo "<li>$link</li>";
		    }
		   	echo '</ul>';
		 }
	}
}
function my_wp_unset_scripts() {
    wp_dequeue_script( 'jquery' );
}
add_action( 'wp_print_scripts', 'my_wp_unset_scripts', 100 );
add_action('wp_enqueue_scripts', 'add_scripts');
if (!function_exists('add_scripts')) {
	function add_scripts() {
	    if(is_admin()) return false;

	    wp_deregister_script('jquery');
	    wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js','','',false);
//	    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js','','',false);
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js','','',true);
        wp_enqueue_script('bundle', get_template_directory_uri().'/js/bootstrap.bundle.js','','',true);
        wp_enqueue_script('main', get_template_directory_uri().'/js/common.js','','',true);
        wp_enqueue_script('scrollme', get_template_directory_uri().'/js/jquery.scrollme.js','','',false);
        wp_enqueue_script('sticky', get_template_directory_uri().'/js/jquery.sticky-kit.min.js','','',true);
        wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js','','',false);
        if ( is_page( 'calculator' ) ) {
            wp_enqueue_script( 'calculator', get_template_directory_uri().'/js/calculator.js','','',true);
        }
    }
}

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
	function add_styles() {
	    if(is_admin()) return false;
	    wp_enqueue_style( 'bs', get_template_directory_uri().'/css/bootstrap.min.css' );
		wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' );
        wp_enqueue_style( 'fas', 'https://use.fontawesome.com/releases/v5.0.4/css/all.css' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/css/owlcarousel/owl.carousel.min.css' );
	}
}

if (!class_exists('bootstrap_menu')) {
	class bootstrap_menu extends Walker_Nav_Menu {
		private $open_submenu_on_hover;

		function __construct($open_submenu_on_hover = true) {
	        $this->open_submenu_on_hover = $open_submenu_on_hover;
	    }

		function start_lvl(&$output, $depth = 0, $args = array()) {
			$output .= "\n<ul class=\"dropdown-menu\">\n";
		}
		function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
			$item_html = '';
			parent::start_el($item_html, $item, $depth, $args);
			if ( $item->is_dropdown && $depth === 0 ) {
			   if (!$this->open_submenu_on_hover) $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"', $item_html);
			   $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html);
			}
			$output .= $item_html;
		}
		function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
			if ( $element->current ) $element->classes[] = 'active';
			$element->is_dropdown = !empty( $children_elements[$element->ID] );
			if ( $element->is_dropdown ) {
			    if ( $depth === 0 ) {
			        $element->classes[] = 'dropdown';
			        if ($this->open_submenu_on_hover) $element->classes[] = 'show-on-hover';
			    } elseif ( $depth === 1 ) {
			        $element->classes[] = 'dropdown-submenu';
			    }
			}
			parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
		}
	}
}

if (!function_exists('content_class_by_sidebar')) {
	function content_class_by_sidebar() {
		if (is_active_sidebar( 'sidebar' )) {
			echo 'col-sm-9';
		} else {
			echo 'col-sm-12';
		}
	}
}

//изменение длины цитаты

function new_excerpt_length($length) {
    return 20;
}
//add_filter('excerpt_length', 'new_excerpt_length');
add_filter( 'excerpt_length', function(){
    return 20;
} );
add_filter('excerpt_more', function($more) {
    return '...';
});


//kama_excerpt
/**
 * Обрезка текста (excerpt). Шоткоды вырезаются. Минимальное значение maxchar может быть 22.
 *
 * @param (строка/массив) $args Параметры.
 *
 * @return HTML
 * ver 2.6.1
 */
function kama_excerpt( $args = '' ){
    global $post;

    $default = array(
        'maxchar'   => 350,   // количество символов.
        'text'      => '',    // какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
        // Если есть тег <!--more-->, то maxchar игнорируется и берется все до <!--more--> вместе с HTML
        'autop'     => true,  // Заменить переносы строк на <p> и <br> или нет
        'save_tags' => '',    // Теги, которые нужно оставить в тексте, например '<strong><b><a>'
        'more_text' => 'Читать дальше...', // текст ссылки читать дальше
    );

    if( is_array($args) ) $_args = $args;
    else                  parse_str( $args, $_args );

    $rg = (object) array_merge( $default, $_args );
    if( ! $rg->text ) $rg->text = $post->post_excerpt ?: $post->post_content;
    $rg = apply_filters('kama_excerpt_args', $rg );

    $text = $rg->text;
    $text = preg_replace ('~\[/?.*?\](?!\()~', '', $text ); // убираем шоткоды, например:[singlepic id=3], markdown +
    $text = trim( $text );

    // <!--more-->
    if( strpos( $text, '<!--more-->') ){
        preg_match('/(.*)<!--more-->/s', $text, $mm );

        $text = trim($mm[1]);

        $text_append = ' <a href="'. get_permalink( $post->ID ) .'#more-'. $post->ID .'">'. $rg->more_text .'</a>';
    }
    // text, excerpt, content
    else {
        $text = trim( strip_tags($text, $rg->save_tags) );

        // Обрезаем
        if( mb_strlen($text) > $rg->maxchar ){
            $text = mb_substr( $text, 0, $rg->maxchar );
            $text = preg_replace('~(.*)\s[^\s]*$~s', '\\1 ...', $text ); // убираем последнее слово, оно 99% неполное
        }
    }

    // Сохраняем переносы строк. Упрощенный аналог wpautop()
    if( $rg->autop ){
        $text = preg_replace(
            array("~\r~", "~\n{2,}~", "~\n~",   '~</p><br ?/>~'),
            array('',     '</p><p>',  '<br />', '</p>'),
            $text
        );
    }

    $text = apply_filters('kama_excerpt', $text, $rg );

    if( isset($text_append) ) $text .= $text_append;

    return ($rg->autop && $text) ? "<p>$text</p>" : $text;
}
//КОНЕЦ kama_excerpt

//КАСТОМНЫЙ ШАБЛОН ДЛЯ ЗАПИСИ
/**
 * Определим константу, которая будет хранить путь к папке single
 */
define( SINGLE_PATH, TEMPLATEPATH . '/single' );

/**
 * Добавим фильтр, который будет запускать функцию подбора шаблонов
 */
add_filter( 'single_template', 'my_single_template' );

/**
 * Функция для подбора шаблона
 */
function my_single_template( $single ) {
    global $wp_query, $post;

    /**
     * Проверяем наличие шаблонов по ID поста.
     * Формат имени файла: single-ID.php
     */
    if ( file_exists( SINGLE_PATH . '/single-' . $post->ID . '.php' ) ) {
        return SINGLE_PATH . '/single-' . $post->ID . '.php';
    }

    /**
     * Проверяем наличие шаблонов для категорий, ищем по ID категории или слагу
     * Формат имени файла: single-cat-SLUG.php или single-cat-ID.php
     */
    foreach ( (array) get_the_category() as $cat ) :

        if ( file_exists( SINGLE_PATH . '/single-cat-' . $cat->slug . '.php' ) ) {
            return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
        } elseif ( file_exists( SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php' ) ) {
            return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
        }

    endforeach;

    /**
     * Проверяем наличие шаблонов для тэгов, ищем по ID тэга или слагу
     * Формат имени файла: single-tag-SLUG.php или single-tag-ID.php
     */
    $wp_query->in_the_loop = true;
    foreach ( (array) get_the_tags() as $tag ) :

        if ( file_exists( SINGLE_PATH . '/single-tag-' . $tag->slug . '.php' ) ) {
            return SINGLE_PATH . '/single-tag-' . $tag->slug . '.php';
        } elseif ( file_exists( SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php' ) ) {
            return SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php';
        }

    endforeach;
    $wp_query->in_the_loop = false;

    /**
     * Если ничего не найдено открываем стандартный single.php
     */
    if ( file_exists( SINGLE_PATH . '/single.php' ) ) {
        return SINGLE_PATH . '/single.php';
    }

    return $single;
}
//КАСТОМНЫЙ ШАБЛОН ДЛЯ ЗАПИСИ == END

add_theme_support( 'post-thumbnails' );