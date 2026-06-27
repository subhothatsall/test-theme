<?php
/**
 * Template Name: Faraa Tourism — Airport Transfers
 * Description: Specialized page for Airport Transfers.
 *
 * @package Laxora
 */

get_header();

if ( have_posts() ) {
    the_post();
    if ( laxora_is_elementor_editor() ) {
        the_content();
        get_footer();
        return;
    }
    rewind_posts();
    the_post();
}
?>

<section class="laxora-simple-banner">
    <div class="laxora-simple-banner__bg" aria-hidden="true">
        <span class="laxora-glow laxora-glow--teal"></span>
    </div>
    <div class="laxora-container laxora-simple-banner__inner">
        <nav class="laxora-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'laxora' ); ?></a>
            <span class="laxora-breadcrumbs__sep">—</span>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'laxora' ); ?></a>
            <span class="laxora-breadcrumbs__sep">—</span>
            <span><?php esc_html_e( 'Airport Transfers', 'laxora' ); ?></span>
        </nav>
        <h1 class="laxora-simple-banner__title"><?php esc_html_e( 'Airport Transfers', 'laxora' ); ?></h1>
    </div>
</section>

<section class="laxora-about-grid">
    <div class="laxora-container laxora-about-grid__inner">
        <div class="laxora-about-grid__left">
            <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Seamless Arrivals & Departures', 'laxora' ); ?></span>
            
            <p class="laxora-about-grid__body">
                <?php esc_html_e( 'Experience the ultimate in convenience and luxury with our premium airport transfer services. We provide live flight tracking, complimentary 60-minute wait time, and meet-and-greet services at arrivals. From wheels-down to suite check-in, we ensure your journey is smooth and entirely stress-free.', 'laxora' ); ?>
            </p>
            
            <div class="laxora-experience-row">
                <ul class="laxora-checklist laxora-checklist--compact">
                    <li><?php esc_html_e( 'Live flight monitoring to ensure timely pickups.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Professional meet-and-greet at the arrivals hall.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Complimentary wait time for delays.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Luggage assistance and luxury vehicle fleet.', 'laxora' ); ?></li>
                </ul>
            </div>
        </div>

        <div class="laxora-about-grid__right">
            <div class="laxora-about-grid__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/fleet/mercedes-s500.jpg' ); ?>" alt="<?php esc_attr_e( 'Airport Transfer Service', 'laxora' ); ?>" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="laxora-cta-band">
    <div class="laxora-container laxora-cta-band__inner">
        <h2 class="laxora-h2"><?php esc_html_e( 'Book Your Airport Transfer', 'laxora' ); ?></h2>
        <p class="laxora-lead">
            <?php esc_html_e( 'Ensure a seamless journey to or from the airport. Contact our concierge to reserve your vehicle today.', 'laxora' ); ?>
        </p>
        <div class="laxora-cta-band__buttons">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Request Quote', 'laxora' ); ?></a>
        </div>
    </div>
</section>

<?php
echo '<div class="laxora-page-content laxora-page-content--empty" hidden>';
the_content();
echo '</div>';
get_footer();
?>
