<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_barang extends MY_Controller {
	
    public function __construct() {
        $this->_current_icon = '<i class="fa fa-gears"></i>';
        $this->_current_page = 'Kategori Barang';
        parent::__construct();
        
        // Breadcrumbs
        $this->breadcrumbs->push('Pengaturan', '#');
        $this->breadcrumbs->push('Kategori Barang', '/admin/kategori_barang');
    }

    public function index($offset=0)
    {
        $model = new Kategori_barang_model();
        // $data['model'] = $model->all();

        $total_row      = count($model->get());
        $paginations    = $this->_pagination($total_row);

        $data['model']  = $model->for_page($offset, $this->limit);
        $data['paging'] = $paginations['links'];
        $data['offset'] = $paginations['offset'];

        $this->render('index', $data);
    }

    public function create()
    {
    	$this->breadcrumbs->push('Tambah Kategori Barang', current_url());

        $model = new Kategori_barang_model();
        if(isset($_POST['KategoriBarang'])) {
            $user = $this->set_data($model);
            if($user->save()) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('admin/kategori_barang');
        }

        $this->render('form');
    }

    public function update($id=null)
    {
    	$this->breadcrumbs->push('Edit Kategori Barang', current_url());

        $model = $this->find_model($id);

        if(isset($_POST['KategoriBarang'])) {
            $user = $this->set_data($model);
            if($user->save()){
                $this->session->set_flashdata('success', 'Data berhasil diupdate');
            }
            redirect('admin/kategori_barang');
        }

        $data['model'] = $model;
        $this->render('form', $data);
    }

    public function delete($id)
    {
        if($this->find_model($id)->delete()) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
        }
        redirect('admin/kategori_barang');
    }

    private function set_data($model)
    {
        $data = $_POST['KategoriBarang'];
        $model->nama = $data['nama'];

        return $model;
    }

    private function find_model($id)
    {
        if(!$id) show_404();

        $model = new Kategori_barang_model();
        $model = $model->find($id);
        return $model;
    }
}