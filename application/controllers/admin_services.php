<?php 
class admin_services extends CI_Controller {
    
    /**
    * name of the folder responsible for the views 
    * which are manipulated by this controller
    * @constant string
    */
    const VIEW_FOLDER = 'admin/admin_services';

	/**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('services_model');

        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
    }

     /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()         
    {

                $data['main_content'] = 'admin/services/add';
                $this->load->view('includes/template', $data);            

    }

}