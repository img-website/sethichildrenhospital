<?php

/**
 * Template Part: Emergency Services
 */

$emergency_heading     = sch_get_field( 'emergency_heading' );
$emergency_icon        = sch_get_field( 'emergency_card_icon' ) ?: 'ambulance';
$emergency_phones      = sch_get_field( 'emergency_phones' );
$night_heading         = sch_get_field( 'emergency_night_heading' );
$night_description     = sch_get_field( 'emergency_night_description' );
$appointment_phone     = sch_get_field( 'emergency_appointment_phone' );
$important_heading     = sch_get_field( 'important_notes_heading' );
$important_icon        = sch_get_field( 'important_notes_icon' ) ?: 'info';
$important_notes       = sch_get_field( 'important_notes' );
?>

<section class="overflow-hidden py-12 md:py-16 bg-white" data-aos="fade-up" data-aos-duration="700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8">

            <!-- Emergency Contact Card -->
            <div class="bg-red-50 p-8 rounded-2xl border border-red-200">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center">
                        <i data-lucide="<?php echo esc_attr( $emergency_icon ); ?>" class="w-6 h-6 text-white"></i>
                    </div>
                    <?php if ( $emergency_heading ) : ?>
                        <h3 class="text-2xl font-bold text-gray-900 font-anek-gujarati"><?php echo esc_html( $emergency_heading ); ?></h3>
                    <?php endif; ?>
                </div>

                <div class="space-y-4">
                    <?php if ( $emergency_phones ) : ?>
                        <?php foreach ( $emergency_phones as $row ) :
                            $phone = ! empty( $row['phone'] ) ? $row['phone'] : '';
                        ?>
                            <?php if ( $phone ) : ?>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="phone" class="w-5 h-5 text-red-500"></i>
                                    <span class="font-bold"><?php echo esc_html( $phone ); ?></span>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if ( $night_heading || $night_description ) : ?>
                        <div class="bg-white p-4 rounded-xl mt-4">
                            <?php if ( $night_heading ) : ?>
                                <h4 class="font-bold mb-2 font-anek-gujarati"><?php echo esc_html( $night_heading ); ?></h4>
                            <?php endif; ?>
                            <?php if ( $night_description ) : ?>
                                <p class="text-gray-600 text-sm"><?php echo esc_html( $night_description ); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Important Notes Card -->
            <div class="bg-yellow-50 p-8 rounded-2xl border border-yellow-200">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center">
                        <i data-lucide="<?php echo esc_attr( $important_icon ); ?>" class="w-6 h-6 text-white"></i>
                    </div>
                    <?php if ( $important_heading ) : ?>
                        <h3 class="text-2xl font-bold text-gray-900 font-anek-gujarati"><?php echo esc_html( $important_heading ); ?></h3>
                    <?php endif; ?>
                </div>

                <?php if ( $important_notes ) : ?>
                    <ul class="space-y-4">
                        <?php foreach ( $important_notes as $row ) :
                            $note = ! empty( $row['note'] ) ? $row['note'] : '';
                        ?>
                            <?php if ( $note ) : ?>
                                <li class="flex items-start gap-3">
                                    <i data-lucide="alert-circle" class="w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5"></i>
                                    <span class="text-gray-700"><?php echo esc_html( $note ); ?></span>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if ( $appointment_phone ) : ?>
                    <div class="mt-6 bg-white p-4 rounded-xl">
                        <p class="text-sm text-gray-600">For appointment booking: <span class="font-bold text-gray-900"><?php echo esc_html( $appointment_phone ); ?></span></p>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
