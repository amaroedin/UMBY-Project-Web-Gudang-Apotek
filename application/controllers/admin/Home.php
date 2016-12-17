<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $_view = 'admin/home/';
  protected $data = array();

	public function __construct() {
       parent::__construct();
       check_security();

       // Breadcrumbs
       $this->breadcrumbs->push('Home', '/admin/home');
       $this->data['current_page'] = '<i class="fa fa-desktop"></i> Dashboard';
    }

    public function index()
    {
    	$data = $this->data;

      $data['content'] = $this->_view.'index';
    	_render($data);
    }
}