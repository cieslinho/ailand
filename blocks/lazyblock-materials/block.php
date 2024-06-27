<section class="materials section section-white">
<div class="container">
    <h2 class="section-title">Nasz asortyment</h2>
    <div class="materials__boxes swiper materials__swiper">
        <div class="materials__wrapper swiper-wrapper">
    <?php foreach( $attributes['box'] as $box ): ?>
        <a href="<?php echo esc_url( $box['link'] ); ?>" class="materials__box swiper-slide">
        <?php if ( isset( $box['img']['url'] ) ) : ?>
  <img class="materials__img" src="<?php echo esc_url( $box['img']['url'] ); ?>" alt="<?php echo esc_attr( $box['img']['alt'] ); ?>">
<?php endif; ?>
        <div class="materials__texts">
            <p class="materials__title">  <?php echo $box['text']; ?>
</p>
            <p class="materials__text">Strona Materiału 🡲</p>
        </div>
    </a>
    <?php endforeach; ?>
</div>
<div class="swiper-button-next partners__next"></div>
<div class="swiper-button-prev partners__prev"></div>
    </div>
</div>
</section>