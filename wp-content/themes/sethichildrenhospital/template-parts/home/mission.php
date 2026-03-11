<?php

/**
 * Template Part: Mission
 */

$badge       = sch_get_field( 'mission_badge' );
$heading     = sch_get_field( 'mission_heading' );
$highlight   = sch_get_field( 'mission_heading_highlight' );
$description = sch_get_field( 'mission_description' );
$image       = sch_get_field( 'mission_image' );
$image_badge = sch_get_field( 'mission_image_badge' );
$badge_icon  = sch_get_field( 'mission_image_badge_icon' ) ?: 'circle-check';
$stats       = sch_get_field( 'mission_stats' );
?>

<section id="mission" class="overflow-hidden py-12 md:py-16 bg-gray-50" data-aos="fade-up" data-aos-duration="700">
    <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-8 items-center">
        <div class="order-2 lg:order-1">
            <?php if ( $badge ) : ?>
                <span class="text-[#00a650] font-semibold tracking-wider text-xs md:text-sm mb-2 block"><?php echo esc_html( $badge ); ?></span>
            <?php endif; ?>

            <?php if ( $heading ) : ?>
                <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900 mb-4">
                    <?php echo esc_html( $heading ); ?>
                    <?php if ( $highlight ) : ?>
                        <span class="text-[#3d348b]"><?php echo esc_html( $highlight ); ?></span>
                    <?php endif; ?>
                </h2>
            <?php endif; ?>

            <?php if ( $description ) : ?>
                <div class="space-y-3 text-gray-600 text-base">
                    <?php echo wp_kses_post( $description ); ?>
                </div>
            <?php endif; ?>

            <?php if ( $stats ) : ?>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <?php foreach ( $stats as $i => $stat ) :
                        $color = ( $i % 2 === 0 ) ? 'text-[#00a650]' : 'text-[#3d348b]';
                    ?>
                        <div class="bg-white p-4 rounded-xl text-center shadow-sm border border-gray-200">
                            <span class="text-xl md:text-2xl font-bold <?php echo esc_attr( $color ); ?>"><?php echo esc_html( $stat['number'] ); ?></span>
                            <div class="text-xs md:text-sm text-gray-500"><?php echo esc_html( $stat['label'] ); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="relative order-1 lg:order-2">
            <?php if ( $image ) : ?>
                <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $heading ); ?>" class="rounded-2xl shadow-2xl w-full h-[20rem] md:h-[25rem] object-cover">
            <?php endif; ?>

            <?php if ( $image_badge ) : ?>
                <div class="absolute md:-bottom-4 md:-left-4 bottom-4 left-4 bg-white p-3 rounded-xl shadow-xl flex items-center gap-2">
                    <i data-lucide="<?php echo esc_attr( $badge_icon ); ?>" class="text-[#00a650] w-6 h-6"></i>
                    <span class="font-bold text-sm"><?php echo esc_html( $image_badge ); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
