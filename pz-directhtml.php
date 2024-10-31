<?php
/*
Plugin Name: Pz-DirectHTML
Plugin URI: https://popozure.info/20150816/8182
Description: ビジュアルエディタだってHTMLしたい
Version: 1.0.0
Author: poporon
Author URI: https://popozure.info/
*/
class Pz_DirectHTML {
	function __construct() {
		add_shortcode( 'direct' , array($this, 'Pz_DirectHTML_ShortCode'));
	}
	function Pz_DirectHTML_ShortCode($opt , $content = null) {
		$content = str_replace(array('&#8216;', '&#8217;', '&#8220;', '&#8221;', '&#8242;', '&#8243;' ), array("'", "'", '"', '"', "'", '"' ),$content);
		$content = html_entity_decode($content);
		return $content;
	}
}
$pz_directhtml = new Pz_DirectHTML;