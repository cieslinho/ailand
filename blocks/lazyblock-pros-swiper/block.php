<section class="section section-white">
    <div class="container">
        <h2 class="section-title section-title--mobile">
            <?php echo $attributes['section-title']; ?>
        </h2>
        <h2 class="section-title section-title--desktop">
            <?php echo $attributes['section-title']; ?>
        </h2>
        <div class="pros__boxes swiper pros__swiper">
            
            <div class="pros__wrapper swiper-wrapper">
            
            <?php foreach( $attributes['box'] as $box ): ?>
            <div class="pros__box swiper-slide">
                <div class="pros__icon"><?php echo ( $box['svg'] ); ?></div>
                <div class="pros__texts">
                    <p class="pros__title">
                        <?php echo $box['title']; ?>
                    </p>
                    <p class="pros__description pros__link">
                        <?php echo $box['description']; ?>
                </p>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
        
        <div class="pros__pagination swiper-pagination"></div>
    </div>
    </div>
    </div>
</section>