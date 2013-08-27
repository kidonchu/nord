<form action="<?php echo home_url( '/' ) ?>" method="get">
	<div class="form-group">
		<label for="search"></label>
		<input type="text" name="s" id="search" placeholder="<?php _e("Search","bonestheme"); ?>" value="<?php the_search_query() ?>">
	</div>
	<button type="submit" class="btn btn-primary"><?php _e("Search","bonestheme"); ?></button>
</form>