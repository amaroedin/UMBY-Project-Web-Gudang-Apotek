<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
    public function __construct()
    {
        $this->_current_icon = '<i class="fa fa-desktop"></i>';
        $this->_current_page = 'Dashboard';
        parent::__construct();
    }

    public function index()
    {
    	$this->render('index');
    }
}