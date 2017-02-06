<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends MY_Controller {
	
    public function __construct() {
        $this->_current_icon = '<i class="fa fa-gears"></i>';
        $this->_current_page = 'Pembelian';
        parent::__construct();
        
        // Breadcrumbs
        $this->breadcrumbs->push('Pembelian', '/admin/Pembelian');
    }

    public function index($offset=0)
    {
        $model = new Pembelian_model();

        if($keyword = $this->input->post('keyword')) {
            $this->session->set_userdata($this->data['cls_name'].'_keyword', $keyword);
        }else{
            $this->session->set_userdata($this->data['cls_name'].'_keyword', '');
        }
        $keyword = $this->session->userdata($this->data['cls_name'].'_keyword');
        
        $total_row      = Pembelian_model::search($keyword)->get('id')->count();
        $paginations    = $this->_pagination($total_row);

        $data['model']  = $model->search($keyword)->for_page($offset, $this->limit);
        $data['paging'] = $paginations['links'];
        $data['offset'] = $paginations['offset'];

        $this->render('index', $data);
    }

    public function create()
    {
    	$this->breadcrumbs->push('Tambah Pembelian', current_url());

        $model = new Pembelian_model();
        if(isset($_POST['Pembelian'])) {
            $data = $this->set_data($model);
            print_r($data);exit();
            if($data->save()) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('admin/pembelian');
        }

        $this->render('form');
    }

    private function set_data($model)
    {
        foreach($_POST['Pembelian'] as $key=>$name) {
        	$model->${"key"} = $name;
        }

        // $model->tgl_faktur 	= convert_date($model->tgl_faktur, 'tgl');
        $model->tgl_input 	= gmt();
        $model->id_user 	= $this->session->userdata('id_user');

        return $model;
    }
}