<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package i-craft
 * @since i-craft 1.0
 */
?>
<?php

$hide_cart = get_theme_mod('hide_cart', of_get_option('hide_cart'));

$top_phone = '';
$top_email = '';

$top_phone = esc_attr(get_theme_mod('top_phone', of_get_option('top_bar_phone', '1-000-123-4567')));
$top_email = esc_attr(get_theme_mod('top_email', of_get_option('top_bar_email', 'email@i-create.com')));
$icraft_logo = get_theme_mod( 'logo', of_get_option('itrans_logo_image', get_template_directory_uri() . '/images/logo.png') );

global $post; 

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<link rel="shortcut icon" href="http://justsushi.zp.ua/favicon.ico"; type="image/x-icon" />
<link rel="icon" href="http://justsushi.zp.ua/favicon.ico"; type="image/x-icon" />

<meta name="yandex-verification" content="ee6a2029cf0e4332" />

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<?php    
    if ( ! function_exists( '_wp_render_title_tag' ) ) :
        function icraft_render_title() {
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
        }
        add_action( 'wp_head', 'icraft_render_title' );
    endif;    
    ?>    
    
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter38752665 = new Ya.Metrika({
                    id:38752665,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38752665" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	 

   	





 
        
     
		
<div class="headerwrap2">

	
	<a href="http://justsushi.zp.ua/">
	<img src="http://justsushi.zp.ua/img/logo.png" border="0" alt="Бесплатная доставка суши и роллов | Запорожье" width="230" height="230"  align="left">
	</a>
	

		<div  style="float:left; color: #4f2100;   display: block;  font-weight: bold; font-size: 300%; margin-left: 2%; margin-right:2%; text-align: center; ">
			<h1>JUST SUSHI | Бесплатная доставка суши и роллов</h1>
		</div>

		<div  class="telefon">
			<img src="http://justsushi.zp.ua/img/tel_logo.png" alt="Звоните"> 095 89 16 999 <br>
			<img src="http://justsushi.zp.ua/img/tel_logo.png" alt="Звоните"> 063 29 58 999	<br>
			<img src="http://justsushi.zp.ua/img/email_logo.png" alt="Пишите"> justsushi@mail.ru
		</div>

	<div  style="float:left;  text-align: center; color: #4f2100;   display: block;   font-weight: bold;    font-size: 150%; margin-right: 2%;  margin-bottom: 0px;">
	  	Работаем с 11.00 до 22.00 <br>
		<div style="margin-top: 5px;">
			<a href="https://vk.com/just_sushi" target="_blank"><img src="http://justsushi.zp.ua/img/vk_logo.png" alt="Just Sushi в Контакте"></a>
			<a href="https://www.instagram.com/just_sushi_zp/" target="_blank"><img src="http://justsushi.zp.ua/img/inst_logo.png" alt="Just Sushi в Инстанрам"></a> 
		</div>

	</div>  
			<div style="padding-right: 2%; width: 70%; float:right;  text-align: right; font-weight: bold;  font-size: 110%; color: #4f2100;">г.Запорожье</div>    
	
        
</div>
		
		
            <header id="masthead" class="site-header" role="banner">
         		 <div class="headerinnerwrap">
				                    

        
                  <div id="navbar" class="navbar">
                        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                           <h3 class="menu-toggle"><?php _e( 'Menu', 'i-craft' ); ?></h3>
                           <!-- <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'i-craft' ); ?>"><?php _e( 'Skip to content', 'i-craft' ); ?></a> -->
                            <?php 
								if ( has_nav_menu(  'primary' ) ) {
										wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container_class' => 'nav-container', 'container' => 'div' ) );
									}
									else
									{
										wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-container' ) ); 
									}
								?>
							
                        </nav>   <!-- #site-navigation --> 

						<div class="header-iconwrap">
                        <?php
                        global $woocommerce;
                        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && empty($hide_cart) ) {
                        ?>
                            <div class="header-icons woocart">
                                <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" >
                                    <span class="show-sidr"><?php _e('Cart','i-craft'); ?></span>
                                    <span class="genericon genericon-cart"></span>
                                    <span class="cart-counts"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                                </a>
                                <?php echo icraft_top_cart(); ?>
                             </div>
                        <?php	
                        }
                        ?>
                        </div>
                                    
                       <!-- <div class="topsearch">
                            <?php get_search_form(); ?>
                        </div> -->
                    </div><!-- #navbar -->
                    <div class="clear"></div>
                </div>
            </header><!-- #masthead -->
        
        
        <!-- #Banner -->
        <?php
		
		$hide_title = rwmb_meta('icraft_hidetitle');
		$show_slider = rwmb_meta('icraft_show_slider');
		$other_slider = rwmb_meta('icraft_other_slider');
		$custom_title = rwmb_meta('icraft_customtitle');
		
		$hide_front_slider = get_theme_mod('slider_stat', of_get_option('hide_front_slider', ''));
		$other_front_slider = htmlspecialchars_decode(get_theme_mod('other_front_slider', of_get_option('other_front_slider')));
		$itrans_slogan = get_theme_mod('banner_text', of_get_option('itrans_slogan', ''));

		
		if($other_slider) :
		?>
		
        <div class="other-slider" style="">
	       	<?php echo do_shortcode( $other_slider ) ?>
        </div>
      	<?php elseif ($show_slider) : ?>
        <?php icraft_ibanner_slider(); ?>
		<?php	
		elseif ( is_home() || (in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && is_shop() && is_front_page()) ) : 
		?>
            <?php if (!empty($other_front_slider)) : ?>
            <?php echo do_shortcode( $other_front_slider ) ?>
        	<?php elseif (!$hide_front_slider) : ?>
            <?php icraft_ibanner_slider(); ?>
        	<?php else : ?>
                <div class="iheader" style="">
                    <div class="titlebar">
                        <h1 class="entry-title">
                            <?php
                                if ($itrans_slogan) {
                                                //bloginfo( 'name' );
                                    echo esc_attr($itrans_slogan);
                                }
                            ?>	                 
                        </h1>
                    </div>
                </div>                                    
        	<?php endif; ?>
            
        <?php elseif(!$hide_title) : ?>
        
        <div class="titleline">
        	<div class="titlebar">
            	
                <?php
					if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && is_shop() )
					{	
						echo '<h1 class="entry-title">';
						woocommerce_page_title();
						echo '</h1>';
						
					} elseif ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && is_product_category() )
					{
						echo '<h1 class="entry-title">';
						woocommerce_page_title();
						echo '</h1>';
						
					} elseif ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && is_product() && empty($custom_title) )
					{
						echo '<h1 class="entry-title">';
						the_title();
						echo '</h1>';
						
					} elseif( is_archive() )
					{
						echo '<h1 class="entry-title">';
							if ( is_day() ) :
								printf( __( 'Daily Archives: %s', 'i-craft' ), get_the_date() );
							elseif ( is_month() ) :
								printf( __( 'Monthly Archives: %s', 'i-craft' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'i-craft' ) ) );
							elseif ( is_year() ) :
								printf( __( 'Yearly Archives: %s', 'i-craft' ), get_the_date( _x( 'Y', 'yearly archives date format', 'i-craft' ) ) );
							elseif ( is_category() ) :	
								printf( __( ' %s', 'i-craft' ), single_cat_title( '', false ) );		
							else :
								_e( 'Archives', 'i-craft' );
							endif;                						
						echo '</h1>';
					} elseif ( is_search() )
					{
						echo '<h1 class="entry-title">';
							printf( __( 'Search Results for: %s', 'i-craft' ), get_search_query() );					
						echo '</h1>';
					} else
					{
						if ( !empty($custom_title) )
						{
							echo '<h1 class="entry-title">'.esc_attr($custom_title).'</h1>';
						}
						else
						{
							echo '<h1 class="entry-title">';
							the_title();
							echo '</h1>';
						}						
					}
					
            	?>



				             
            	
            </div>



        </div>
        
		<?php endif; ?>
		<div id="main" class="site-main">

