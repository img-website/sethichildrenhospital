<?php

/**
 * Template Part: Legacy
 */

$badge          = sch_get_field( 'legacy_badge' );
$badge_icon     = sch_get_field( 'legacy_badge_icon' ) ?: 'sparkles';
$heading        = sch_get_field( 'legacy_heading' );
$highlight      = sch_get_field( 'legacy_heading_highlight' );
$suffix         = sch_get_field( 'legacy_heading_suffix' );
$image          = sch_get_field( 'legacy_image' );
$founded_year   = sch_get_field( 'legacy_founded_year' );
$founded_text   = sch_get_field( 'legacy_founded_text' );
$description    = sch_get_field( 'legacy_description' );
$vision_heading = sch_get_field( 'legacy_vision_heading' );
$vision_text    = sch_get_field( 'legacy_vision_text' );
$stats          = sch_get_field( 'legacy_stats' );
?>

<section id="legacy" class="overflow-hidden py-12 md:py-16 bg-gradient-to-br from-green-900 via-primary to-emerald-900 overflow-hidden" data-aos="fade-up" data-aos-duration="700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-8">
            <?php if ( $badge ) : ?>
                <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/20 border border-white/40 text-white text-xs md:text-sm font-bold uppercase tracking-wider">
                    <i data-lucide="<?php echo esc_attr( $badge_icon ); ?>" class="w-3.5 h-3.5"></i>
                    <?php echo esc_html( $badge ); ?>
                </span>
            <?php endif; ?>

            <?php if ( $heading ) : ?>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold font-anek-gujarati text-white mt-3">
                    <?php echo esc_html( $heading ); ?>
                    <?php if ( $highlight ) : ?>
                        <span class="text-white/90"><?php echo esc_html( $highlight ); ?></span>
                    <?php endif; ?>
                    <?php if ( $suffix ) : ?>
                        <?php echo esc_html( $suffix ); ?>
                    <?php endif; ?>
                </h2>
            <?php endif; ?>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 items-center">
            <div class="relative">
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $heading ); ?>" class="rounded-2xl shadow-2xl shadow-lime-700 w-full h-[20rem] md:h-[25rem] object-cover">
                <?php endif; ?>

                <?php if ( $founded_year || $founded_text ) : ?>
                    <div class="absolute md:-bottom-4 md:-left-4 bottom-4 left-4 bg-white p-3 rounded-xl shadow-xl max-w-[11.25rem] border border-white/30">
                        <?php if ( $founded_year ) : ?>
                            <span class="text-lg font-bold text-[#3d348b]"><?php echo esc_html( $founded_year ); ?></span>
                        <?php endif; ?>
                        <?php if ( $founded_text ) : ?>
                            <p class="text-xs text-gray-600"><?php echo esc_html( $founded_text ); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="space-y-4">
                <?php if ( $description ) : ?>
                    <p class="text-white/90 text-base"><?php echo esc_html( $description ); ?></p>
                <?php endif; ?>

                <?php if ( $vision_heading || $vision_text ) : ?>
                    <div class="bg-white/10 backdrop-blur-sm p-5 rounded-xl border-l-4 border-white/60 shadow-sm">
                        <?php if ( $vision_heading ) : ?>
                            <h3 class="text-lg font-bold text-white mb-1 font-anek-gujarati"><?php echo esc_html( $vision_heading ); ?></h3>
                        <?php endif; ?>
                        <?php if ( $vision_text ) : ?>
                            <p class="text-white/80 text-sm"><?php echo esc_html( $vision_text ); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ( $stats ) : ?>
                    <div class="grid grid-cols-3 gap-3">
                        <?php foreach ( $stats as $stat ) : ?>
                            <div class="text-center bg-white/10 rounded-xl py-3 border border-white/20">
                                <span class="text-lg md:text-2xl font-bold text-white"><?php echo esc_html( $stat['number'] ); ?></span>
                                <span class="block text-xs md:text-sm text-white/80"><?php echo esc_html( $stat['label'] ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
