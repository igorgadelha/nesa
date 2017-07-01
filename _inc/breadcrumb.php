<?php if( function_exists('bootstrap_breadcrumb') ): ?>
	<div class="row">
		<section class="section-breadcrumb">
				<?php bootstrap_breadcrumb('<i class="fa fa-home fa-lg"></i>', array('video', 'galeria', 'audio','documento', 'tipos-de-documento') ); ?>
		</section>
	</div>
<?php endif; ?>
