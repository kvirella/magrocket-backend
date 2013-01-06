<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publicationsedit extends CI_Controller {

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
		$this->load->library('uuid');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
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
			$publicationData['ID'] = 0;
			$publicationData['NAME'] = "";
			$publicationData['UUID'] = "";
			$publicationData['PARSE_APPLICATION_ID'] = "";
			$publicationData['PARSE_REST_API_KEY'] = "";
					
			$data = array(
				'publicationData' => $publicationData,
				'status_message' => ""
			);
				
			$this->load->view('publicationsedit_view', $data);
		}
	}
	
	function edit($UUID)
	{		
		$user = $this->ion_auth->user()->row();
		$user_account_uuid = $user->ACCOUNT_UUID;
		
		$query = $this->db->query("SELECT * FROM PUBLICATION WHERE ACCOUNT_UUID = '" . $user_account_uuid . "' and UUID = '" . $UUID . "'");
		
		$row = $query->row(); 
		
		$publicationData['ID'] = $row->ID;
		$publicationData['NAME'] = $row->NAME;
		$publicationData['UUID'] = $row->UUID;
		$publicationData['PARSE_APPLICATION_ID'] = $row->PARSE_APPLICATION_ID;
		$publicationData['PARSE_REST_API_KEY'] = $row->PARSE_REST_API_KEY;
												
		$data = array(
		'publicationData' => $publicationData,
		'status_message' => ""
		);
	
		$this->load->view('publicationsedit_view',$data);	
	}
	
	function add()
	{	 
		$publicationData['ID'] = 0;
		$publicationData['NAME'] = "";
		$publicationData['UUID'] = $this->uuid->v4();
		$publicationData['PARSE_APPLICATION_ID'] = "";
		$publicationData['PARSE_REST_API_KEY'] = "";		
												
		$data = array(
		'publicationData' => $publicationData,
		'status_message' => ""
		);
	
		$this->load->view('publicationsedit_view',$data);	
	}

	function postback()
	{	
		//switch ($_POST['submitbutton']) 
		//{
		//  case 'Save':
				$this->save();
		//		break;
		//}
	}
	
	function save()
    {
		//Get Form Post Variables
		$ID = $this->input->post('ID');
		$user = $this->ion_auth->user()->row();
		$ACCOUNT_UUID = $user->ACCOUNT_UUID;
		
		$NAME = $this->input->post('NAME');
		$UUID = $this->input->post('UUID');
		$PARSE_APPLICATION_ID = $this->input->post('PARSE_APPLICATION_ID');
		$PARSE_REST_API_KEY = $this->input->post('PARSE_REST_API_KEY');				

		//Check for Errors
		//if(($this->input->post('CONNECT_TITLE') == "") || ($this->input->post('CONNECT_TYPE') == "")  || ($this->input->post('CONNECT_METADATA1') == "") || ($this->input->post('CONNECT_ICON') == "") || ($this->input->post('CONNECT_ORDER') == ""))
		//{
		//	$connectData['ID'] = $ID;
		//	$connectData['CONNECT_TITLE'] = $CONNECT_TITLE;
		//	$connectData['CONNECT_TYPE'] = $CONNECT_TYPE;
		//	$connectData['CONNECT_METADATA1'] = $CONNECT_METADATA1;
		//	$connectData['CONNECT_METADATA2'] = $CONNECT_METADATA2;
		//	$connectData['CONNECT_ICON'] = $CONNECT_ICON;
		//	$connectData['CONNECT_ORDER'] = $CONNECT_ORDER;	

		//	$data = array(
		//	'connectData' => $connectData,
		//	'status_message' => "Error - Please enter all data correctly."
		//	);
													
		//	$this->load->view('connectscreenedit_view',$data);
		//}
		//else
		//{
			//Insert Into Database
			$data = array(
	                'NAME' => $NAME,
					'UUID' => $UUID,
					'ACCOUNT_UUID' => $ACCOUNT_UUID,
					'PARSE_APPLICATION_ID' => $PARSE_APPLICATION_ID,
					'PARSE_REST_API_KEY' => $PARSE_REST_API_KEY		
	            );
				
			$this->load->library('table');
			
			if($ID != 0)
			{
				$this->db->where('ID', $ID);
				$this->db->where('ACCOUNT_UUID', $ACCOUNT_UUID);
				$this->db->where('UUID', $UUID);
				$this->db->update('PUBLICATION', $data); 
			}
			else
			{
				$this->db->insert('PUBLICATION', $data);
				$ID = $this->db->insert_id();
			}
			
			redirect('/publications');
		//}
	}
	
	function printArray($array, $devolver = false)
	{
		$string = '<pre>' . print_r($array, true) . '</pre>';
		if($devolver) return $string;
		else echo $string;
	}
}
