<?php
/**
 * The footer for the Laxora theme.
 *
 * @package Laxora
 */
?>
</main>

<footer id="laxora-footer" class="laxora-footer">
    <div class="laxora-container laxora-footer__grid">
        <div class="laxora-footer__brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="laxora-logo" rel="home">
                <span class="laxora-logo__wordmark">FARAA TOURISM</span>
                <span class="laxora-logo__dot" aria-hidden="true"></span>
            </a>
            <p class="laxora-footer__tagline">
                <?php esc_html_e( 'Executive chauffeur services for those who measure travel in moments of uninterrupted productivity, privacy, and refinement.', 'laxora' ); ?>
            </p>
        </div>

        <div class="laxora-footer__col">
            <h4 class="laxora-footer__title"><?php esc_html_e( 'Navigate', 'laxora' ); ?></h4>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'laxora-footer__menu',
                'fallback_cb'    => 'laxora_fallback_menu',
                'depth'          => 1,
            ) );
            ?>
        </div>

        <div class="laxora-footer__col">
            <h4 class="laxora-footer__title"><?php esc_html_e( 'Concierge', 'laxora' ); ?></h4>
            <?php if ( is_active_sidebar( 'footer-concierge' ) ) : ?>
                <?php dynamic_sidebar( 'footer-concierge' ); ?>
            <?php else : ?>
                <ul class="laxora-footer__contact">
                    <li><?php echo esc_html( get_theme_mod( 'laxora_email', 'Faraaelitetoursandtravel@gmail.com' ) ); ?></li>
                    <li><?php echo esc_html( get_theme_mod( 'laxora_phone', '+1 (800) FARAA TOURISM' ) ); ?></li>
                    <li><?php esc_html_e( '24 / 7 Global Operations', 'laxora' ); ?></li>
                    <li style="margin-top: 12px;">
                        <a href="https://www.instagram.com/faraatourism?igsh=MTA3aGZpM2ZlN2MxZw==" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:8px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            Instagram
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <div class="laxora-container laxora-footer__bottom">
        <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Faraa Tourism. All Rights Reserved.', 'laxora' ); ?></p>
        <p class="laxora-footer__credit">
            <?php esc_html_e( 'Designed by', 'laxora' ); ?>
            <a href="https://givemepopularity.ae/" target="_blank" rel="noopener">givemepopularity.ae</a>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>


