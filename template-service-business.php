<?php
/**
 * Template Name: Faraa Tourism — Business Meetings
 * Description: Specialized page for Business Meetings.
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
        <span class="laxora-glow laxora-glow--gold"></span>
    </div>
    <div class="laxora-container laxora-simple-banner__inner">
        <nav class="laxora-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'laxora' ); ?></a>
            <span class="laxora-breadcrumbs__sep">—</span>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'laxora' ); ?></a>
            <span class="laxora-breadcrumbs__sep">—</span>
            <span><?php esc_html_e( 'Business Meetings', 'laxora' ); ?></span>
        </nav>
        <h1 class="laxora-simple-banner__title"><?php esc_html_e( 'Business Meetings', 'laxora' ); ?></h1>
    </div>
</section>

<section class="laxora-about-grid">
    <div class="laxora-container laxora-about-grid__inner">
        <div class="laxora-about-grid__left">
            <span class="laxora-eyebrow laxora-eyebrow--gold"><?php esc_html_e( 'Executive Corporate Travel', 'laxora' ); ?></span>
            
            <p class="laxora-about-grid__body">
                <?php esc_html_e( 'Make a lasting impression with our executive chauffeur service tailored for business meetings and corporate roadshows. Our discreet, highly trained chauffeurs provide a productive, secure environment so you can focus on what matters most. Built for boards, delegations, and executives who value precision.', 'laxora' ); ?>
            </p>
            
            <div class="laxora-experience-row">
                <ul class="laxora-checklist laxora-checklist--compact">
                    <li><?php esc_html_e( 'Dedicated account manager for corporate bookings.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'NDA-bound chauffeurs ensuring absolute discretion.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Onboard Wi-Fi and amenities for productivity.', 'laxora' ); ?></li>
                    <li><?php esc_html_e( 'Multi-city coordination and wait-and-return services.', 'laxora' ); ?></li>
                </ul>
            </div>
        </div>

        <div class="laxora-about-grid__right">
            <div class="laxora-about-grid__image">
                <img src="<?php echo esc_url( LAXORA_URI . '/assets/images/fleet-page/sedan-service.jpg' ); ?>" alt="<?php esc_attr_e( 'Business Meeting Chauffeur', 'laxora' ); ?>" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="laxora-cta-band">
    <div class="laxora-container laxora-cta-band__inner">
        <h2 class="laxora-h2"><?php esc_html_e( 'Reserve Executive Transport', 'laxora' ); ?></h2>
        <p class="laxora-lead">
            <?php esc_html_e( 'Share your itinerary and requirements. Our corporate team will arrange a seamless travel experience.', 'laxora' ); ?>
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
