<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends MY_Controller {
	
    public function __construct() {
        $this->_current_icon = '<i class="fa fa-gears"></i>';
        $this->_current_page = 'Barang';
        parent::__construct();
        
        // Breadcrumbs
        $this->breadcrumbs->push('Barang', '/admin/barang');
    }

    public function index($offset=0)
    {
        $model = new Barang_model();

        if($keyword = $this->input->post('keyword')) {
            $this->session->set_userdata($this->data['cls_name'].'_keyword', $keyword);
        }else{
            $this->session->set_userdata($this->data['cls_name'].'_keyword', '');
        }
        $keyword = $this->session->userdata($this->data['cls_name'].'_keyword');
        
        $total_row      = Barang_model::search($keyword)->get('id')->count();
        $paginations    = $this->_pagination($total_row);

        $data['model']  = $model->search($keyword)->for_page($offset, $this->limit);
        $data['paging'] = $paginations['links'];
        $data['offset'] = $paginations['offset'];

        $this->render('index', $data);
    }

    public function create()
    {
    	$this->breadcrumbs->push('Tambah Barang', current_url());

        $model = new Barang_model();
        if(isset($_POST['Barang'])) {
            $user = $this->set_data($model);
            if($user->save()) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('admin/barang');
        }

        $this->render('form');
    }

    public function update($id=null)
    {
    	$this->breadcrumbs->push('Edit Barang', current_url());

        $model = $this->find_model($id);

        if(isset($_POST['Barang'])) {
            $user = $this->set_data($model);
            if($user->save()){
                $this->session->set_flashdata('success', 'Data berhasil diupdate');
            }
            redirect('admin/barang');
        }

        $data['model'] = $model;
        $this->render('form', $data);
    }

    public function delete($id)
    {
        if($this->find_model($id)->delete()) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
        }
        redirect('admin/barang');
    }

    private function set_data($model)
    {
        $data = $_POST['Barang'];
        $model->kode                = $data['kode'];
        $model->nama                = $data['nama'];
        $model->id_satuan           = $data['id_satuan'];
        $model->id_kategori_barang  = $data['id_kategori_barang'];
        $model->id_jenis_barang     = $data['id_jenis_barang'];
        $model->keterangan          = $data['keterangan'];

        return $model;
    }

    private function find_model($id)
    {
        if(!$id) show_404();

        $model = new Barang_model();
        $model = $model->find($id);
        return $model;
    }
}