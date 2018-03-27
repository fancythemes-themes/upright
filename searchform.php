<?php
/**
 * The template for displaying search forms
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="s" class="assistive-text"><?php esc_html_e( 'Search', 'upright' ); ?></label>
	<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s"
	       placeholder="<?php esc_attr_e( 'Search here...', 'upright' ); ?>"/>
	<input type="submit" class="submit" name="submit" id="searchsubmit"
	       value="<?php esc_attr_e( 'Search', 'upright' ); ?>"/>
</form>
