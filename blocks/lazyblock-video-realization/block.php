<section class="<?php echo $attributes['section-class']; ?>">
    <div class="container">
        
   
        <div class="section-boxes">
            
            
            
            <div class="section-right">
            <video class="section-video" autoplay loop muted controls src="<?php echo esc_url( $attributes['section-video']['url'] ); ?>"></video>
           
  
                
            </div>
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
        </div>
    </div>
</section>