<?php

/**
 * Available variables
 * - WP_Term[] $categories
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php if ( !empty( $categories ) ) : ?>

	<?php

	/**
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderCategoriesListItemOpen				- 10
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderCategoriesTitle						- 20
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderAttributesListItemValueHolderOpen	- 30
	 */
	do_action( 'mphb_render_loop_room_type_before_categories' );

	$categories = array_map( function( $category ) {

		$categoryLink = get_term_link( $category );

		if ( is_wp_error( $categoryLink ) ) {
			$categoryLink = '#';
		}

		return sprintf( '<a href="%s">%s</a>', esc_url( $categoryLink ), $category->name );
	}, $categories );

	echo ' ' . join( ', ', $categories );

	/**
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderAttributesListItemValueHolderClose	- 10
	 * @hooked \MPHB\Views\LoopRoomTypeView::_renderAdultsListItemClose					- 20
	 */
	do_action( 'mphb_render_loop_room_type_after_categories' );
	?>

<?php endif; ?>