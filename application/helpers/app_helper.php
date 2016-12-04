<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Layout
*/
if(!function_exists('_render')) {
	function _render($data) {
		$ci =& get_instance();

		$ci->load->view('layouts/main', $data);
	}
}


/*
 * Security
*/
if(!function_exists('check_security')) {
	function check_security() {
		$ci =& get_instance();
		if(!$ci->session->userdata('is_login')) {
			redirect('site');
		}
	}
}