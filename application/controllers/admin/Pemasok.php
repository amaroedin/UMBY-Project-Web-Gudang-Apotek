<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasok extends MY_Controller {
	
    public function __construct() {
        $this->_current_icon = '<i class="fa fa-gears"></i>';
        $this->_current_page = 'Pemasok';
        parent::__construct();
        
        // Breadcrumbs
        $this->breadcrumbs->push('Pemasok', '/admin/pemasok');
    }

    public function index($offset=0)
    {
        $model = new Pemasok_model();

        if($keyword = $this->input->post('keyword')) {
            $this->session->set_userdata($this->data['cls_name'].'_keyword', $keyword);
        }else{
            $this->session->set_userdata($this->data['cls_name'].'_keyword', '');
        }
        $keyword = $this->session->userdata($this->data['cls_name'].'_keyword');
        
        $total_row      = Pemasok_model::search($keyword)->get('id')->count();
        $paginations    = $this->_pagination($total_row);

        $data['model']  = $model->search($keyword)->for_page($offset, $this->limit);
        $data['paging'] = $paginations['links'];
        $data['offset'] = $paginations['offset'];

        $this->render('index', $data);
    }

    public function create()
    {
    	$this->breadcrumbs->push('Tambah Pemasok', current_url());

        $model = new Pemasok_model();
        if(isset($_POST['Pemasok'])) {
            $user = $this->set_data($model);
            if($user->save()) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('admin/pemasok');
        }

        $this->render('form');
    }

    public function update($id=null)
    {
    	$this->breadcrumbs->push('Edit Pemasok', current_url());

        $model = $this->find_model($id);

        if(isset($_POST['Pemasok'])) {
            $user = $this->set_data($model);
            if($user->save()){
                $this->session->set_flashdata('success', 'Data berhasil diupdate');
            }
            redirect('admin/pemasok');
        }

        $data['model'] = $model;
        $this->render('form', $data);
    }

    public function delete($id)
    {
        if($this->find_model($id)->delete()) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
        }
        redirect('admin/pemasok');
    }

    private function set_data($model)
    {
        $data = $_POST['Pemasok'];
        $model->nama            = $data['nama'];
        $model->alamat          = $data['alamat'];
        $model->kd_pos          = $data['kd_pos'];
        $model->no_telpon       = $data['no_telpon'];
        $model->fax             = $data['fax'];
        $model->email           = $data['email'];
        $model->kontak_person   = $data['kontak_person'];

        return $model;
    }

    private function find_model($id)
    {
        if(!$id) show_404();

        $model = new Pemasok_model();
        $model = $model->find($id);
        return $model;
    }
}