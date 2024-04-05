<section class="<?php echo $attributes['section-class']; ?>">
    <div class="container">
        
   
        <div class="section-boxes">
            
            <div class="section-left">
                <div class="section-texts">
                    <h2 class="section-title">
                    <?php echo $attributes['section-title']; ?>
                    </h2>
                   
                    <p class="section-text">
                    <?php echo $attributes['section-text']; ?>
               
                    </p>
                </div>

                <div class="section-buttons">
                    
                    <a href="<?php echo esc_url( $attributes['btn-link'] ); ?>" class="<?php echo $attributes['btn-class']; ?>"> <?php echo $attributes['btn-text']; ?></a>
                </div>

            </div>
            
            <div class="section-right">
            <?php if ( isset( $attributes['section-img']['url'] ) ) : ?>
  <img class="section-img" src="<?php echo esc_url( $attributes['section-img']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['section-img']['alt'] ); ?>">
<?php endif; ?>
                
            </div>
        </div>
    </div>
</section>