<form method="get" class="navbar-form navbar-left" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="navbar-search" class="sr-only">
		<?php _e( 'Search:', 'odin' ); ?> 
	</label>
	<div class="form-group">
		<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" />
		<select class="form-control" name="categories">
			<option value="">Categories</option>
		</select>
	</div>
	<button type="submit" class="btn btn-danger"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>

<ul class="nav navbar-nav navbar-right">
	<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
	<li><a href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="label label-default">R$ 00,00</span> </a></li>
</ul>
