<?php

/**
 * Template Part: Appointment Banner
 */

$heading  = sch_get_field( 'appointment_banner_heading' );
$btn_link = sch_get_field( 'appointment_banner_link' );

if ( ! $heading && empty( $btn_link ) ) {
    return;
}
?>

<section class="overflow-hidden py-8 bg-gradient-to-r from-[#00a650] to-[#3d348b]" data-aos="fade-up" data-aos-duration="600">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
        <?php if ( $heading ) : ?>
            <h3 class="text-white text-xl md:text-2xl font-bold md:text-left text-center"><?php echo esc_html( $heading ); ?></h3>
        <?php endif; ?>

        <?php if ( ! empty( $btn_link['url'] ) ) : ?>
            <a href="<?php echo esc_url( $btn_link['url'] ); ?>"<?php echo ! empty( $btn_link['target'] ) ? ' target="' . esc_attr( $btn_link['target'] ) . '" rel="noopener noreferrer"' : ''; ?> class="bg-white text-[#00a650] px-8 py-3 rounded-full font-semibold hover:shadow-xl transition-all hover:-translate-y-0.5">
                <?php echo esc_html( $btn_link['title'] ); ?>
            </a>
        <?php endif; ?>
    </div>
</section>
