<section class="section section-white category">
    <div class="container">
        <h2 class="section-title">
            <?php echo $attributes['section-title']; ?>
        </h2>
        <div class="category__boxes">
            <?php foreach( $attributes['category'] as $box ): ?>
            <a href="<?php echo esc_url( $box['link'] ); ?>" class="category__box">
                <?php if ( isset( $box['img']['url'] ) ) : ?>
                <img class="category__img" src="<?php echo esc_url( $box['img']['url'] ); ?>"
                    alt="<?php echo esc_attr( $box['img']['alt'] ); ?>">
                <?php endif; ?>
                <p class="category__title">
                    <?php echo $box['title']; ?>
                </p>
            </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>