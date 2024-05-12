<section class="support section section-white">
    <div class="container">
        <h2 class="section-title">
            <?php echo $attributes['section-title']; ?>
        </h2>
        <div class="support__boxes support__swiper swiper">
            <div class="swiper-wrapper support__wrapper">
                <?php foreach( $attributes['box'] as $box ): ?>
                <div class="support__box swiper-slide">
                    <?php if ( isset( $box['img']['url'] ) ) : ?>
                    <img class="support__img" src="<?php echo esc_url( $box['img']['url'] ); ?>"
                        alt="<?php echo esc_attr( $box['img']['alt'] ); ?>">
                    <?php endif; ?>
                    <div class="support__texts">
                        <p class="support__title">
                            <?php echo $box['title']; ?>
                        </p>
                        <p class="support__description">
                            <?php echo $box['description']; ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>