<?php
/**
 * The header for the Laxora theme.
 *
 * @package Laxora
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'laxora-body' ); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'laxora' ); ?></a>

<header id="laxora-header" class="laxora-header" data-laxora-nav>
    <div class="laxora-container laxora-header__inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="laxora-logo" rel="home">
            <?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
                <span class="laxora-logo__wordmark">FARAA TOURISM</span>
                <span class="laxora-logo__dot" aria-hidden="true"></span>
            <?php endif; ?>
        </a>

        <nav class="laxora-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'laxora' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'laxora-nav__menu',
                'fallback_cb'    => 'laxora_fallback_menu',
                'depth'          => 2,
            ) );
            ?>
        </nav>

        <div class="laxora-header__right">
            <a href="#contact" class="laxora-btn laxora-btn--outline laxora-header__cta"><?php esc_html_e( 'Request Quote', 'laxora' ); ?></a>

            <button class="laxora-nav-toggle" type="button" aria-controls="laxora-mobile-menu" aria-expanded="false" data-laxora-nav-toggle>
                <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'laxora' ); ?></span>
                <span class="laxora-burger" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <div id="laxora-mobile-menu" class="laxora-mobile-menu" hidden>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'laxora-mobile-menu__list',
            'fallback_cb'    => 'laxora_fallback_menu',
            'depth'          => 2,
        ) );
        ?>
        <a href="#contact" class="laxora-btn laxora-btn--outline laxora-mobile-menu__cta"><?php esc_html_e( 'Request Quote', 'laxora' ); ?></a>
    </div>
</header>

<?php
if ( ! function_exists( 'laxora_fallback_menu' ) ) {
    function laxora_fallback_menu() {
        echo '<ul class="laxora-nav__menu">';
        echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'laxora' ) . '</a></li>';
        
        echo '<li class="menu-item-has-children"><a href="' . esc_url( home_url( '/services/' ) ) . '">' . esc_html__( 'Services', 'laxora' ) . '</a>';
        echo '<ul class="sub-menu">';
        echo '<li><a href="' . esc_url( home_url( '/airport-transfers/' ) ) . '">' . esc_html__( 'Airport Transfers', 'laxora' ) . '</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/business-meetings/' ) ) . '">' . esc_html__( 'Business Meetings', 'laxora' ) . '</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/wedding-transfers/' ) ) . '">' . esc_html__( 'Wedding Transfers', 'laxora' ) . '</a></li>';
        echo '</ul>';
        echo '</li>';
        
        echo '<li><a href="' . esc_url( home_url( '/fleet/' ) ) . '">' . esc_html__( 'Fleet', 'laxora' ) . '</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">' . esc_html__( 'About', 'laxora' ) . '</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact', 'laxora' ) . '</a></li>';
        echo '</ul>';
    }
}
?>

<main id="content" class="laxora-main">

