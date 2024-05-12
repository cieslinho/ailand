<section class="section tabs">
	<div class="container">
		<p class="section-title">Informacje o materiale</p>
		<div class="tabs">
			<button id="docs" class="tabs-btn">Dokumenty <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z" fill="#231F20"/>
</svg>
</button>
			<div class="tab tab-docs">
				<?php echo do_shortcode('[acf field="dokumenty"]'); ?>
             
			</div>
			<button id="settings" class="tabs-btn">Właściwości <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z" fill="#231F20"/>
</svg>
</button>
			<div class="tab">
				<?php echo do_shortcode('[acf field="settings"]'); ?>
			</div>
			<button id="usage" class="tabs-btn">Zastosowanie <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z" fill="#231F20"/>
</svg>
</button>
			<div class="tab">
				<?php echo do_shortcode('[acf field="zastosowanie"]'); ?>
			</div>
			
		</div>
	</div>
</section>