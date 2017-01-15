<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $_view;
    protected $_current_page;
    protected $_current_icon;
    protected $data = array();

    protected $limit = 20;

    // Layout
    protected $layout = 'layouts/main';

	public function __construct() {
        parent::__construct();
        $this->check_security();

        // Breadcrumbs
        $this->breadcrumbs->push('Home', '/admin/home');

        $this->data['cls_name'] = strtolower($this->router->class);

        $this->_view = $this->data['cls_name'];

        $this->data['current_page'] = $this->_current_page;
        $this->data['current_icon'] = $this->_current_icon;
    }

    protected function check_security()
    {
    	if(!$this->session->userdata('is_login')) {
			redirect('site');
		}
		return;
    }

    protected function render($view = null, $data = array())
    {
        $this->data = array_merge($this->data, $data);
        $this->data['content'] = $this->_view.'/'.$view;
        $this->load->view($this->layout, $this->data);
    }

    protected function _pagination($total_row=0)
    {
        $config = array();
        $per_page = $this->limit;

        $config["base_url"] = base_url() . 'admin/' . $this->data['cls_name'] . '/index';
        $config["total_rows"] = $total_row;
        $config["per_page"] = $per_page;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'Awal';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        if($this->uri->segment(4)){
            $page = ($this->uri->segment(4));

            if($page<0){
                $page = $page * -1;
            }

        } else {
            $page = 1;
        }

        $data = array(
            'links' => $this->pagination->create_links(),
            'offset'=> $per_page * ($page-1)
        );

        $this->data['page'] = "Page ".$page." of ".ceil($total_row/$per_page);
        // $this->data['page'] = 'Manampilkan ' . $per_page . ' dari ' . $total_row . ' data';

        return $data;
    }

    public function clear()
    {
        $cls_name = $this->data['cls_name'];
        if($this->session->userdata($cls_name.'_keyword')) {
            $this->session->unset_userdata($cls_name.'_keyword');
        }
        redirect('admin/'.$cls_name);
    }
}