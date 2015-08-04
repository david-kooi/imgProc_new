<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master_controller extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
       {
            parent::__construct();

            $this->load->model('image_upload_functs');
            $this->load->model('DB_functs');

       }

	public function index()
	{
		log_message('info', 'master_controller: In index()');

		//Load Start Page
		$this->load->view('start_page');
		log_message('info', 'master_controller: start_page loaded');

		//Load Start Data (Company and Ratio Lists)


	}

	public function uploadImages(){
		log_message('info', 'master_controller: In uploadImages()');

		$photos = $this->image_upload_fucts->uploadImages();

		echo json_encode($photos);
		//TODO
		//$this->image_upload_functs->checkUpload($photos);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */