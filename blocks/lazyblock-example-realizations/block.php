<section class="example section">
    <div class="container">
        <h2 class="section-title">
        <?php echo $attributes['section-title']; ?>
        </h2>
        <div class="example__boxes">
       
            <div class="example__box">
                <div class="example__content">
                
                    <div class="example__swiper swiper">
                        <div class="example__wrapper swiper-wrapper">
                        <?php foreach( $attributes['gallery'] as $image ): ?>
                            <div class="example__slide swiper-slide">
                            <?php if ( isset( $image['img']['url'] ) ) : ?>
                    <img class="example__img" src="<?php echo esc_url( $image['img']['url'] ); ?>"
                        alt="<?php echo esc_attr( $image['img']['alt'] ); ?>">
                    <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                </div>
                <div class="example__texts">
                    <p class="example__text">
                    <?php echo $attributes['text']; ?>
                    </p>
                    <p class="example__description">
                    <?php echo $attributes['description']; ?>
                    </p>

                </div>
            </div>
            
        </div>
    </div>
</section>