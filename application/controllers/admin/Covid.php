<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {

            parent::__construct();
           $this->load->model('admin/CommonModel');
    }
	public function index()
	{
        $data['title']="Dashboard |".SITENAME;
        $data['subPage']="admin/common/covid";
        $data['addBtnTitle'] = '';
        $data['addBtnPath'] = '';
        $this->load->view('admin/layout/index', $data);

    }
	public function covidList(){

		// POST data
		$postData = $this->input->post();
	
		// Get data
		$data = $this->CommonModel->getCovid($postData);
	
		echo json_encode($data);
	  }
}