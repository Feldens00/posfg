<?php
/**
 * The template for displaying search form
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s"  aria-label="Search" placeholder="<?php
		esc_attr_e( 'Search', 'foundationpress' ); ?>">
		<div class="input-group-button">
			<button type="submit" class="search-submit"><i class="fas fa-search fa-2x icon-search"></i></button>
		</div>
	</div>
</form>
