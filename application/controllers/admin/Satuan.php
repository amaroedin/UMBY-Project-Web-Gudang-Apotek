<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends MY_Controller {
	
    public function __construct() {
        $this->_current_icon = '<i class="fa fa-gears"></i>';
        $this->_current_page = 'Satuan Barang';
        parent::__construct();
        
        // Breadcrumbs
        $this->breadcrumbs->push('Pengaturan', '#');
        $this->breadcrumbs->push('Satuan Barang', '/admin/satuan');
    }

    public function index($offset=0)
    {
        $model = new Satuan_model();
        
        $total_row      = count($model->get());
        $paginations    = $this->_pagination($total_row);

        $data['model']  = $model->for_page($offset, $this->limit);
        $data['paging'] = $paginations['links'];
        $data['offset'] = $paginations['offset'];

        $this->render('index', $data);
    }

    public function create()
    {
    	$this->breadcrumbs->push('Tambah Satuan Barang', current_url());

        $model = new Satuan_model();
        if(isset($_POST['Satuan'])) {
            $user = $this->set_data($model);
            if($user->save()) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('admin/satuan');
        }

        $this->render('form');
    }

    public function update($id=null)
    {
    	$this->breadcrumbs->push('Edit Satuan Barang', current_url());

        $model = $this->find_model($id);

        if(isset($_POST['Satuan'])) {
            $user = $this->set_data($model);
            if($user->save()){
                $this->session->set_flashdata('success', 'Data berhasil diupdate');
            }
            redirect('admin/satuan');
        }

        $data['model'] = $model;
        $this->render('form', $data);
    }

    public function delete($id)
    {
        if($this->find_model($id)->delete()) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
        }
        redirect('admin/satuan');
    }

    private function set_data($model)
    {
        $data = $_POST['Satuan'];
        $model->nama = $data['nama'];

        return $model;
    }

    private function find_model($id)
    {
        if(!$id) show_404();

        $model = new Satuan_model();
        $model = $model->find($id);
        return $model;
    }
}