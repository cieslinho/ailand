<section class="section-white section contact">
    <div class="container">
    <h2 class="section-title section-title--desktop">
            <?php echo $attributes['section-title']; ?>
        </h2>
        <div class="contact__boxes">
        <?php foreach( $attributes['box'] as $box ): ?>
            <div class="contact__box contact__box-desktop">
                <div class="contact__top">
                <?php echo ( $box['box-svg'] ); ?>
                <p class="contact__title"><?php echo $box['box-title']; ?></p>
            </div>
                <div class="contact__bottom">
                    
                    <a href="<?php echo $box['box-link']; ?>" class="contact__link">
                        <?php echo $box['box-link-text']; ?>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
       
    </div>
</section>