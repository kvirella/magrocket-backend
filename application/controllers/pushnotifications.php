<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pushnotifications extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');

		$this->load->database();

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
	}

	//redirect if needed, otherwise display the user list
	function index()
	{

		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin())
		{
			//redirect them to the home page because they must be an administrator to view this
			redirect('/', 'refresh');
		}
		else
		{
			$this->_loadview();
		}
	}
	
	function load($UUID)
	{
		$this->_loadview($UUID);
	}
	
	function _loadview($UUID)
	{
		$this->load->helper(array('form', 'url', 'date'));

		$this->load->library('table');
		
		$query = $this->db->query("SELECT * FROM PUBLICATION WHERE UUID = '" . $UUID . "'");
		
		$row = $query->row(); 
		
		$pushData['NAME'] = $row->NAME;
		$pushData['PUBLICATION_UUID'] = $row->UUID;
												
		$data = array(
		'pushData' => $pushData,
		'status_message' => ""
		);

		$this->load->view('pushnotifications_view',$data);
				
	}
	
	function printArray($array, $devolver = false)
	{
		$string = '<pre>' . print_r($array, true) . '</pre>';
		if($devolver) return $string;
		else echo $string;
	}
	
}