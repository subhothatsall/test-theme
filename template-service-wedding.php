<?php
/**
 * Template Name: Faraa Tourism — Wedding Transfers
 * Description: Specialized page for Wedding Transfers.
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
        <span class="laxora-glow laxora-glow--purple"></span>
    </div>
    <div class="laxora-container laxora-simple-banner__inner">
        <nav class="laxora-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'laxora' ); ?></a>
            <span class="laxora-breadcrumbs__sep">—</span>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'laxora' ); ?></a>
            <span class="laxora-breadcrumbs__sep">—</span>
            <span><?php esc_html_e( 'Wedding Transfers', 'laxora' ); ?></span>
        </nav>
        <h1 class="laxora-simple-banner__title"><?php esc_html_e( 'Wedding Transfers', 'laxora' ); ?></h1>
    </div>
</section>

<section class="laxora-about-grid">
    <div class="laxora-container laxora-about-grid__inner">
        <div class="laxora-about-grid__left">
            <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Elegance for Your Special Day', 'laxora' ); ?></span>
            
            <p class="laxora-about-grid__body">
                <?php esc_html_e( 'Your wedding day deserves nothing short of perfection. We provide styled, multi-vehicle convoys for weddings, galas, and milestones. From liveried chauffeurs to meticulously detailed vehicles, our team ensures that you and your guests arrive in flawless style.', 'laxora' ); ?>
            </p>
            
            <div class="laxora-experience-row">
                <ul class="laxora-checklist laxora-checklist--compact">
                    <li><?php esc_html_e( 'Liveried chauffeurs providing red-carpet service.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Immaculate luxury vehicles perfect for photography.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Coordinated multi-vehicle fleets for family and guests.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Optional bespoke florals and vehicle ribboning on request.', 'laxora' ); ?></li>
                </ul>
            </div>
        </div>

        <div class="laxora-about-grid__right">
            <div class="laxora-about-grid__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/fleet-page/limo-service.jpg' ); ?>" alt="<?php esc_attr_e( 'Wedding Transfer Service', 'laxora' ); ?>" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="laxora-cta-band">
    <div class="laxora-container laxora-cta-band__inner">
        <h2 class="laxora-h2"><?php esc_html_e( 'Plan Your Wedding Transport', 'laxora' ); ?></h2>
        <p class="laxora-lead">
            <?php esc_html_e( 'Speak with our dedicated event coordinator to organize an unforgettable arrival for your special day.', 'laxora' ); ?>
        </p>
        <div class="laxora-cta-band__buttons">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="laxora-btn laxora-btn--primary"><?php esc_html_e( 'Contact Coordinator', 'laxora' ); ?></a>
        </div>
    </div>
</section>

<?php
echo '<div class="laxora-page-content laxora-page-content--empty" hidden>';
the_content();
echo '</div>';
get_footer();
?>
