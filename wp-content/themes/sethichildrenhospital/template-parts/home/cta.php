<?php

/**
 * Template Part: Call to Action
 */

$badge      = sch_get_field( 'cta_badge' );
$heading    = sch_get_field( 'cta_heading' );
$description = sch_get_field( 'cta_description' );
$bg_image   = sch_get_field( 'cta_bg_image' );
$btn1_link  = sch_get_field( 'cta_btn1_link' );
$btn1_icon  = sch_get_field( 'cta_btn1_icon' ) ?: 'calendar-check';
$btn2_link  = sch_get_field( 'cta_btn2_link' );
$btn2_icon  = sch_get_field( 'cta_btn2_icon' ) ?: 'phone';
?>

<section class="overflow-hidden relative py-12 md:py-16 bg-gradient-to-r from-[#00a650] to-[#3d348b]" data-aos="fade-up" data-aos-duration="700">
    <?php if ( $bg_image ) : ?>
        <img src="<?php echo esc_url( $bg_image ); ?>" class="absolute inset-0 z-0 pointer-events-none mix-blend-soft-light opacity-50 object-cover w-full h-full" alt="<?php echo esc_attr( $heading ); ?>" title="<?php echo esc_attr( $heading ); ?>" />
    <?php endif; ?>

    <div class="max-w-7xl mx-auto px-4 text-center text-white relative z-10">
        <?php if ( $badge ) : ?>
            <span class="inline-block px-3 py-1 bg-white/20 rounded-full text-xs md:text-sm font-bold uppercase tracking-wider mb-3"><?php echo esc_html( $badge ); ?></span>
        <?php endif; ?>

        <?php if ( $heading ) : ?>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold font-anek-gujarati mb-4"><?php echo esc_html( $heading ); ?></h2>
        <?php endif; ?>

        <?php if ( $description ) : ?>
            <p class="text-base text-white/80 max-w-2xl mx-auto mb-6"><?php echo esc_html( $description ); ?></p>
        <?php endif; ?>

        <div class="flex flex-wrap justify-center gap-3">
            <?php if ( ! empty( $btn1_link['url'] ) ) : ?>
                <a href="<?php echo esc_url( $btn1_link['url'] ); ?>"<?php echo ! empty( $btn1_link['target'] ) ? ' target="' . esc_attr( $btn1_link['target'] ) . '" rel="noopener noreferrer"' : ''; ?> class="px-6 py-3 text-sm font-semibold bg-white text-[#00a650] rounded-full hover:shadow-2xl transition flex items-center gap-2">
                    <i data-lucide="<?php echo esc_attr( $btn1_icon ); ?>" class="w-4 h-4"></i> <?php echo esc_html( $btn1_link['title'] ); ?>
                </a>
            <?php endif; ?>

            <?php if ( ! empty( $btn2_link['url'] ) ) : ?>
                <a href="<?php echo esc_url( $btn2_link['url'] ); ?>"<?php echo ! empty( $btn2_link['target'] ) ? ' target="' . esc_attr( $btn2_link['target'] ) . '" rel="noopener noreferrer"' : ''; ?> class="px-6 py-3 text-sm font-semibold bg-transparent border-2 border-white text-white rounded-full hover:bg-white/10 flex items-center gap-2">
                    <i data-lucide="<?php echo esc_attr( $btn2_icon ); ?>" class="w-4 h-4"></i> <?php echo esc_html( $btn2_link['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
