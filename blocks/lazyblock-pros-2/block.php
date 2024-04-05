<section class="pros">
    <div class="container">
        <h2 class="section-title section-title--mobile">
            <?php echo $attributes['section-title-mobile']; ?>
        </h2>
        <h2 class="section-title section-title--desktop">
            <?php echo $attributes['section-title-desktop']; ?>
        </h2>
        <div class="pros__boxes">
            
            
            <?php foreach( $attributes['box-mobile'] as $box ): ?>
            <div class="pros__box pros__box--mobile">
                <div class="pros__icon"><?php echo ( $box['box-svg'] ); ?></div>
                <div class="pros__texts">
                    <p class="pros__title">
                        <?php echo $box['box-title']; ?>
                    </p>
                    <p class="pros__description">
                        <?php echo $box['box-description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
            <?php foreach( $attributes['box-desktop'] as $boxDesktop ): ?>
            <div class="pros__box pros__box--desktop">
                <div class="pros__icon"><?php echo ( $boxDesktop['box-svg-desktop'] ); ?></div>
                <div class="pros__texts">
                    <p class="pros__title">
                        <?php echo $boxDesktop['box-title-desktop']; ?>
                    </p>
                    <p class="pros__description">
                        <?php echo $boxDesktop['box-description-desktop']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
    </div>
</section>