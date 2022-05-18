<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php if(is_page()&&file_exists(get_theme_file_path('/assets/css/').get_page_uri().'.css')){
				echo "<link rel='stylesheet' href='";echo get_theme_file_uri('/assets/css/');echo get_page_uri().'.css?';echo date('YmdHi', filemtime( get_theme_file_path('/assets/css/').get_page_uri().'.css' ));echo "'>";
		} ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-blank' ); ?></a>
	<header>
        <h1><a href=""><img src="" alt="">LOGO SAMPLE</a></h1>

        <nav id="nav">
            <div class="title">
                <a class="mintyo" href="#"><img class="pc_only" src="" alt="お国自慢の会">一般社団法人日本全国お国自慢の会</a>
            </div>

            <img class="sp_only" src="" alt="">

            <ul>
                <li><a href="#">トップページ</a></li>
                <li><a href="#">会社概要</a></li>
                <li><a href="#service">ブログ</a></li>
                <li><a href="">ご当地物資販売</a></li>
                <li><a href="">開催イベント</a></li>
                <li><a href="">日本の勉強会</a></li>
                <li><a href="">お問い合わせ</a></li>
            </ul>

            <div class="link pc_flex">
                <a href=""><img src="assets/img/facebook.svg" alt=""></a>
                <a href=""><img src="assets/img/instagram.svg" alt=""></a>
                <a href=""><img src="assets/img/line.svg" alt=""></a>
            </div>
        </nav>
        <div id="hamburger">
            <span class="inner_line" id="line1"></span>
            <span class="inner_line" id="line2"></span>
            <span class="inner_line" id="line3"></span>
        </div>
    </header>

	<?php
		$args  = array(
			'post_type' => 'post',
			'meta_key'  => 'special_box_check',
		);
		$query = new WP_Query( $args );
		if ( null != $query ) {
			if ( is_home() || is_front_page() ) {
				echo '<div class="featured-content wrap">';
					get_template_part( 'template-parts/featured-posts', 'posts' );
				echo '</div>';
			}
		}
		?>

	<div id="content" class="site-content">
		<div class="wrap">
