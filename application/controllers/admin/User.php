<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	
    public function __construct() {
        $this->_current_icon = '<i class="fa fa-users"></i>';
        $this->_current_page = 'Pengguna';
        parent::__construct();
        
        // Breadcrumbs
        $this->breadcrumbs->push('Pengguna', '/admin/user');
    }

    public function index($offset=0)
    {
        $model = new User_model();

        if($keyword = $this->input->post('keyword')) {
            $this->session->set_userdata($this->data['cls_name'].'_keyword', $keyword);
        }else{
            $this->session->set_userdata($this->data['cls_name'].'_keyword', '');
        }
        $keyword = $this->session->userdata($this->data['cls_name'].'_keyword');

        $total_row      = User_model::search($keyword)->get('id')->count();
        $paginations    = $this->_pagination($total_row);

        $data['model']  = $model->search($keyword)->for_page($offset, $this->limit);
        $data['paging'] = $paginations['links'];
        $data['offset'] = $paginations['offset'];

        $this->render('index', $data);
    }

    public function create()
    {
        $this->breadcrumbs->push('Tambah Pengguna', '#');

        $model = new User_model();
        if(isset($_POST['User'])) {
            $user = $this->set_data($model);
            if($user->save()) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('admin/user');
        }

        $this->render('form');
    }

    public function update($id)
    {
        $this->breadcrumbs->push('Edit Pengguna', '#');

        $model = new User_model();
        $model = $model->find($id);

        if(isset($_POST['User'])) {
            $user = $this->set_data($model);
            if($user->save()){
                $this->session->set_flashdata('success', 'Data berhasil diupdate');
            }
            redirect('admin/user');
        }

        $data['model'] = $model;
        $this->render('form', $data);
    }

    public function delete($id)
    {
        
    }

    private function set_data($model)
    {
        $data = $_POST['User'];
        $model->nama            = $data['nama'];
        $model->username        = $data['username'];
        $model->id_grup         = $data['id_grup'];
        $model->id_status       = $data['id_status'] ? $data['id_status'] : 2;
        if(!$model->id || ($model->id && $data['password'])){
            $model->password_hash   = sha1($data['password']);
        }

        return $model;
    }
}