<?php

namespace MPHB\Views;

class LoopRoomTypeView extends RoomTypeView {

	const TEMPLATE_CONTEXT = 'loop-room-type';

	public static function renderViewDetailsButton(){
		mphb_get_template_part( static::TEMPLATE_CONTEXT . '/view-details-button' );
	}

	public static function renderBookButton(){
		if ( !MPHB()->settings()->main()->isBookingDisabled() ) {
			mphb_get_template_part( static::TEMPLATE_CONTEXT . '/book-button' );
		}
	}

	public static function renderGallery(){
		$roomType = MPHB()->getCurrentRoomType();
		do_action( 'mphb_render_loop_room_type_gallery', $roomType );

		parent::renderGallery();
	}

	/**
	 * @deprecated 1.2.0
	 */
	public static function renderGalleryOrFeaturedImage(){
		$roomType = MPHB()->getCurrentRoomType();
		if ( $roomType->hasGallery() ) {
			self::renderGallery();
		} else {
			self::renderFeaturedImage();
		}
	}

	public static function _renderAttributesTitle(){
		echo '<h3 class="mphb-room-type-details-title">' . __( 'Details', 'motopress-hotel-booking' ) . '</h3>';
	}

	public static function _renderAttributesListOpen(){
		echo '<ul class="mphb-loop-room-type-attributes">';
	}

	public static function _renderAttributesListClose(){
		echo '</ul>';
	}

	public static function _renderCategoriesListItemOpen(){
		echo '<li class="mphb-room-type-categories">';
	}

	public static function _renderCategoriesTitle(){
		echo '<span class="mphb-attribute-title mphb-categories-title">' . __( 'Categories:', 'motopress-hotel-booking' ) . '</span>';
	}

	public static function _renderCategoriesListItemClose(){
		echo '</li>';
	}

	public static function _renderFacilitiesListItemOpen(){
		echo '<li class="mphb-room-type-facilities">';
	}

	public static function _renderFacilitiesTitle(){
		echo '<span class="mphb-attribute-title mphb-facilities-title">' . __( 'Amenities:', 'motopress-hotel-booking' ) . '</span>';
	}

	public static function _renderFacilitiesListItemClose(){
		echo '</li>';
	}

	public static function _renderAdultsListItemOpen(){
		echo '<li class="mphb-room-type-adults-capacity">';
	}

	public static function _renderAdultsTitle(){
		echo '<span class="mphb-attribute-title mphb-adults-title">' . __( 'Adults:', 'motopress-hotel-booking' ) . '</span>';
	}

	public static function _renderAdultsListItemClose(){
		echo '</li>';
	}

	public static function _renderChildrenListItemOpen(){
		echo '<li class="mphb-room-type-children-capacity">';
	}

	public static function _renderChildrenTitle(){
		echo '<span class="mphb-attribute-title mphb-children-title">' . __( 'Children:', 'motopress-hotel-booking' ) . '</span>';
	}

	public static function _renderChildrenListItemClose(){
		echo '</li>';
	}

	public static function _renderBedTypeListItemOpen(){
		echo '<li class="mphb-room-type-bed-type">';
	}

	public static function _renderBedTypeTitle(){
		echo '<span  class="mphb-attribute-title mphb-bed-type-title">' . __( 'Bed Type:', 'motopress-hotel-booking' ) . '</span>';
	}

	public static function _renderBedTypeListItemClose(){
		echo '</li>';
	}

	public static function _renderSizeListItemOpen(){
		echo '<li class="mphb-room-type-size">';
	}

	public static function _renderSizeTitle(){
		echo '<span class="mphb-attribute-title mphb-size-title">' . __( 'Size:', 'motopress-hotel-booking' ) . '</span>';
	}

	public static function _renderSizeListItemClose(){
		echo '</li>';
	}

	public static function _renderViewListItemOpen(){
		echo '<li class="mphb-room-type-view">';
	}

	public static function _renderViewTitle(){
		echo '<span class="mphb-attribute-title mphb-view-title">' . __( 'View:', 'motopress-hotel-booking' ) . '</span>';
	}

	public static function _renderViewListItemClose(){
		echo '</li>';
	}

	public static function _renderFeaturedImageParagraphOpen(){
		echo '<p class="post-thumbnail mphb-loop-room-thumbnail">';
	}

	public static function _renderFeaturedImageParagraphClose(){
		echo '</p>';
	}

	public static function _renderPriceParagraphOpen(){
		echo '<p class="mphb-regular-price">';
	}

	public static function _renderPriceTitle(){
		echo '<strong>' . __( 'Prices start at:', 'motopress-hotel-booking' ) . '</strong>';
	}

	public static function _renderPriceParagraphClose(){
		echo '</p>';
	}

	public static function _renderTitleHeadingOpen(){
		echo '<h2 class="mphb-room-type-title entry-title">';
	}

	public static function _renderTitleHeadingClose(){
		echo '</h2>';
	}

	public static function _renderBookButtonWrapperOpen(){
		echo '<div class="mphb-to-book-btn-wrapper">';
	}

	public static function _renderBookButtonWrapperClose(){
		echo '</div>';
	}

	public static function _renderBookButtonBr(){
		echo '<br/>';
	}

	public static function _renderViewDetailsButtonParagraphOpen(){
		echo '<p class="mphb-view-details-button-wrapper">';
	}

	public static function _renderViewDetailsButtonParagraphClose(){
		echo '</p>';
	}

	public static function _enqueueGalleryScripts(){
		wp_enqueue_script( 'mphb-flexslider' );
		wp_enqueue_style( 'mphb-flexslider-css' );
	}

	public static function _renderImagesWrapperOpen(){
		echo '<div class="mphb-room-type-images">';
	}

	public static function _renderImagesWrapperClose(){
		echo '</div>';
	}

	public static function _renderAttributesListItemValueHolderOpen(){
		echo '<span class="mphb-attribute-value">';
	}

	public static function _renderAttributesListItemValueHolderClose(){
		echo '</span>';
	}

}
