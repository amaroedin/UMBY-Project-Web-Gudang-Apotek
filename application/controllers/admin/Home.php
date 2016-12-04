<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $_view = 'admin/home/';

	public function __construct() {
       parent::__construct();
       check_security();
    }

    public function index()
    {
    	

    	$data['content'] = $this->_view.'index';
    	_render($data);
    }
}