<section class="section section-white pcv">
    <div class="container">
    <p class="featured__subsection">
    Tworzywa sztuczne do nabycia poprzez kontakt
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z" fill="black"/>
</svg>

        </p>
        <div class="pcv__boxes swiper pcv__swiper">
            <div class="swiper-wrapper pcv-wrapper ">
        <?php foreach( $attributes['box'] as $box ): ?>
            <a href="<?php echo esc_url( $box['link'] ); ?>" class="pcv__box swiper-slide">
            <?php if ( isset( $box['img']['url'] ) ) : ?>
  <img class="pcv__img" src="<?php echo esc_url( $box['img']['url'] ); ?>" alt="<?php echo esc_attr( $box['img']['alt'] ); ?>">
<?php endif; ?>
                <p class="pcv__title">
                <?php echo $box['title']; ?>

                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.3327 21L14.6993 19.3083L18.841 15.1667H4.66602V12.8333H18.841L14.6993 8.69167L16.3327 7L23.3327 14L16.3327 21Z" fill="black"/>
</svg>

                </p>
            </a>
            <?php endforeach; ?>


        </div>
        </div>
    </div>
</section>