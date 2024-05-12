<section class="featured section-white section">
    <div class="container">
        <p class="featured__subsection">
            Produkty do nabycia w E-sklepie
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z" fill="black"/>
</svg>

        </p>
        <div class="featured__boxes swiper featured__swiper">
        <div class="featured__wrapper swiper-wrapper">
    <?php foreach( $attributes['box'] as $box ): ?>
        <a href="<?php echo esc_url( $box['link'] ); ?>" class="featured__box swiper-slide">
        <?php if ( isset( $box['img']['url'] ) ) : ?>
  <img class="featured__img" src="<?php echo esc_url( $box['img']['url'] ); ?>" alt="<?php echo esc_attr( $box['img']['alt'] ); ?>">
<?php endif; ?>
        <div class="featured__texts">
            <p class="featured__title">  <?php echo $box['text']; ?>
            <span class="featured__arrow">🡲</span>
</p>
            
        </div>
    </a>
    <?php endforeach; ?>
    </div>
    </div>
    </div>
</section>