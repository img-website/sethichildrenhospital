<?php

/**
 * Template Part: Health Tips
 */

$badge     = sch_get_field( 'health_tips_badge' );
$heading   = sch_get_field( 'health_tips_heading' );
$highlight = sch_get_field( 'health_tips_heading_highlight' );
$items     = sch_get_field( 'health_tips_items' );

$color_map = array(
    'green'  => array(
        'border' => 'border-[#00a650]',
        'icon'   => 'text-[#00a650]',
        'link'   => 'text-[#00a650]',
    ),
    'purple' => array(
        'border' => 'border-[#3d348b]',
        'icon'   => 'text-[#3d348b]',
        'link'   => 'text-[#3d348b]',
    ),
    'pink'   => array(
        'border' => 'border-pink-600',
        'icon'   => 'text-pink-600',
        'link'   => 'text-pink-600',
    ),
);
?>

<section class="overflow-hidden py-12 md:py-16 bg-gray-50" data-aos="fade-up" data-aos-duration="700">
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
                    $color_key    = ! empty( $item['color'] ) ? $item['color'] : 'green';
                    $colors       = isset( $color_map[ $color_key ] ) ? $color_map[ $color_key ] : $color_map['green'];
                    $icon         = ! empty( $item['icon'] ) ? $item['icon'] : 'heart';
                    $item_heading = ! empty( $item['heading'] ) ? $item['heading'] : '';
                    $description  = ! empty( $item['description'] ) ? $item['description'] : '';
                    $item_link    = ! empty( $item['link'] ) ? $item['link'] : array('title' => 'Read more', 'url' => '#', 'target' => '');
                ?>
                    <div class="bg-white flex flex-col p-6 rounded-xl shadow-lg border-l-4 <?php echo esc_attr( $colors['border'] ); ?> hover:shadow-xl transition">
                        <?php if ( $item_heading ) : ?>
                            <h3 class="font-bold text-lg md:text-xl mb-2 flex items-center gap-2 font-anek-gujarati">
                                <i data-lucide="<?php echo esc_attr( $icon ); ?>" class="w-5 h-5 <?php echo esc_attr( $colors['icon'] ); ?>"></i>
                                <?php echo esc_html( $item_heading ); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ( $description ) : ?>
                            <p class="text-gray-600 text-sm flex-1"><?php echo esc_html( $description ); ?></p>
                        <?php endif; ?>

                        <a href="<?php echo esc_url( $item_link['url'] ); ?>"<?php echo ! empty( $item_link['target'] ) ? ' target="' . esc_attr( $item_link['target'] ) . '" rel="noopener noreferrer"' : ''; ?> class="mt-3 inline-flex items-center <?php echo esc_attr( $colors['link'] ); ?> text-sm font-medium">
                            <?php echo esc_html( $item_link['title'] ); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
