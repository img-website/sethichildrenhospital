<?php

/**
 * Template Part: Core Values
 */

$badge     = sch_get_field( 'values_badge' );
$heading   = sch_get_field( 'values_heading' );
$highlight = sch_get_field( 'values_heading_highlight' );
$items     = sch_get_field( 'values_items' );

$color_map = [
    'green'  => [
        'icon_bg'        => 'bg-[#00a650]/10',
        'icon_color'     => 'text-[#00a650]',
        'hover_border'   => 'hover:border-[#00a650]/30',
        'group_hover_bg' => 'group-hover:bg-[#00a650]',
    ],
    'purple' => [
        'icon_bg'        => 'bg-[#3d348b]/10',
        'icon_color'     => 'text-[#3d348b]',
        'hover_border'   => 'hover:border-[#3d348b]/30',
        'group_hover_bg' => 'group-hover:bg-[#3d348b]',
    ],
];
?>

<section class="overflow-hidden py-12 md:py-16 bg-gradient-to-b from-gray-50 to-white" data-aos="fade-up" data-aos-duration="700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-8">
            <?php if ( $badge ) : ?>
                <span class="text-[#00a650] font-semibold tracking-wider text-xs md:text-sm"><?php echo esc_html( $badge ); ?></span>
            <?php endif; ?>

            <?php if ( $heading ) : ?>
                <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold font-anek-gujarati text-gray-900 mt-2">
                    <?php echo esc_html( $heading ); ?>
                    <?php if ( $highlight ) : ?>
                        <span class="text-[#3d348b]"><?php echo esc_html( $highlight ); ?></span>
                    <?php endif; ?>
                </h2>
            <?php endif; ?>
        </div>

        <?php if ( $items ) : ?>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ( $items as $item ) :
                    $color  = $item['color'] ?? 'green';
                    $styles = $color_map[ $color ] ?? $color_map['green'];
                ?>
                    <div class="group bg-white p-6 rounded-xl shadow-soft border border-gray-200 <?php echo esc_attr( $styles['hover_border'] ); ?> hover:-translate-y-1 transition">
                        <div class="w-12 h-12 <?php echo esc_attr( $styles['icon_bg'] ); ?> rounded-xl flex items-center justify-center mb-3 <?php echo esc_attr( $styles['group_hover_bg'] ); ?> group-hover:text-white transition">
                            <i data-lucide="<?php echo esc_attr( $item['icon'] ); ?>" class="w-6 h-6 <?php echo esc_attr( $styles['icon_color'] ); ?> group-hover:text-white"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2 font-anek-gujarati"><?php echo esc_html( $item['heading'] ); ?></h3>
                        <p class="text-gray-500 text-sm"><?php echo esc_html( $item['description'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
