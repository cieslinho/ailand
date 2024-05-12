<section class="solutions ">
    <div class="container">
        <div class="solutions__boxes">
       
            <div class="solutions__box">
                <div class="solutions__content">
                
                    <div class="solutions__swiper swiper">
                        <div class="solutions__wrapper swiper-wrapper">
                        <?php foreach( $attributes['images'] as $image ): ?>
                            <div class="solutions__slide swiper-slide">
                            <?php if ( isset( $image['img']['url'] ) ) : ?>
                    <img class="solutions__img" src="<?php echo esc_url( $image['img']['url'] ); ?>"
                        alt="<?php echo esc_attr( $image['img']['alt'] ); ?>">
                    <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                </div>
                <p class="solutions__title">
                <?php echo $attributes['title']; ?>
                </p>
            </div>
            
        </div>
    </div>
</section>