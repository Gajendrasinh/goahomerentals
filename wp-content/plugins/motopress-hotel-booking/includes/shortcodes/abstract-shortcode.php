<?php

namespace MPHB\Shortcodes;

abstract class AbstractShortcode {

	protected $name;

	public function __construct(){
		$this->addActions();
	}

	public function addActions(){
		add_action( 'init', array( $this, 'register' ), 5 );
	}

	public function register(){
		add_shortcode( $this->name, array( $this, 'render' ) );
	}

	abstract public function render( $atts, $content = '', $name );

	/**
	 *
	 * @param array $attrs Attributes of shortcode
	 * @return string
	 */
	public function generateShortcode( $attrs = array() ){
		$shortcode = '[' . $this->name;
		foreach ( $attrs as $attrName => $attrValue ) {
			$shortcode .= sprintf( ' %s="%s"', $attrName, $attrValue );
		}
		$shortcode .= ']';

		return $shortcode;
	}

	public function getName(){
		return $this->name;
	}

}
