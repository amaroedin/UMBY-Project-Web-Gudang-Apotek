<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	private $_view = 'admin/user/';
    protected $data = array();

	public function __construct() {
        parent::__construct();
        check_security();

        // Breadcrumbs
        $this->breadcrumbs->push('Home', '/admin/home');
        $this->breadcrumbs->push('Pengguna', '/admin/user');

        $this->data['current_page'] = '<i class="fa fa-users"></i> Pengguna';
    }

    public function index($offset=0)
    {
        $data = $this->data;

        $model = new User_model();
        $data['model'] = $model->all();

        $data['content'] = $this->_view.'index';
    	return _render($data);
    }

    public function create()
    {
        $this->breadcrumbs->push('Tambah Pengguna', '#');

        $model = new User_model();
        if(isset($_POST['User'])) {
            $data = $_POST['User'];
            $model->save($data);
        }

        $data = $this->data;

        $data['content'] = $this->_view.'form';
        return _render($data);
    }

    public function update($id)
    {
        $this->breadcrumbs->push('Edit Pengguna', '#');

        $model = new User_model();
        if(isset($_POST['User'])) {
            $data = $_POST['User'];
            $model->save($data);
        }

        $data = $this->data;

        $data['model'] = $model->find($id);
        $data['content'] = $this->_view.'form';
        return _render($data);
    }
}