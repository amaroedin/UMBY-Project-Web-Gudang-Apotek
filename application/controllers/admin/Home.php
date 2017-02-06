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
        $model = new Barang_model();
        $data['stat_jenis_barang'] = $model->get_statistik_by_jenis();
        // $data['stat_kategori_barang'] = $model->get_statistik_by_kategori()->toArray();

        $this->render('index', $data);
    }
}