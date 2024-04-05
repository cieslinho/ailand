<header class="hero">
    <div class="hero__box">
    <?php if ( isset( $attributes['hero-img']['url'] ) ) : ?>
  <img class="hero__img" src="<?php echo esc_url( $attributes['hero-img']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['hero-img']['alt'] ); ?>">
<?php endif; ?>
        <h1 class="hero__title"><?php echo $attributes['hero-title']; ?></h1>
        </div>
</header>