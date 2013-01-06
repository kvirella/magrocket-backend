<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issuesedit extends CI_Controller {

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
			$issueData['ID'] = 0;
			$issueData['PUBLICATION_UUID'] = "";
			$issueData['NAME'] = "";
			$issueData['TITLE'] = "";
			$issueData['INFO'] = "";
			$issueData['DATE'] = "";
			$issueData['COVER'] = "";
			$issueData['URL'] = "";
			$issueData['ITUNES_SUMMARY'] = "";
			$issueData['ITUNES_COVERART_URL'] = "";
			$issueData['ITUNES_PUBLISHED'] = "";
			$issueData['ITUNES_UPDATED'] = "";
		
			$data = array(
				'issueData' => $issueData,
				'status_message' => ""
			);
				
			$this->load->view('issuesedit_view', $data);
		}
	}
	
	function edit($ID)
	{			
		$query = $this->db->query("SELECT * FROM ISSUES WHERE ID = " . $ID);
		
		$row = $query->row(); 
		
		$issueData['ID'] = $row->ID;
		$issueData['PUBLICATION_UUID'] = $row->PUBLICATION_UUID;
		$issueData['NAME'] = $row->NAME;
		$issueData['TITLE'] = $row->TITLE;
		$issueData['INFO'] = $row->INFO;
		$issueData['DATE'] = $row->DATE;
		$issueData['COVER'] = $row->COVER;
		$issueData['URL'] = $row->URL;
		$issueData['ITUNES_SUMMARY'] = $row->ITUNES_SUMMARY;
		$issueData['ITUNES_COVERART_URL'] = $row->ITUNES_COVERART_URL;
		$issueData['ITUNES_PUBLISHED'] = $row->ITUNES_PUBLISHED;
		$issueData['ITUNES_UPDATED'] = $row->ITUNES_UPDATED;
												
		$data = array(
		'issueData' => $issueData,
		'status_message' => ""
		);
	
		$this->load->view('issuesedit_view',$data);	
	}
	
	function add($UUID)
	{	 
		$issueData['ID'] = 0;
		$issueData['PUBLICATION_UUID'] = $UUID;
		$issueData['NAME'] = "";
		$issueData['TITLE'] = "";
		$issueData['INFO'] = "";
		$issueData['DATE'] = "";
		$issueData['COVER'] = "";
		$issueData['URL'] = "";
		$issueData['ITUNES_SUMMARY'] = "";
		$issueData['ITUNES_COVERART_URL'] = "";
		$issueData['ITUNES_PUBLISHED'] = "";
		$issueData['ITUNES_UPDATED'] = "";		
												
		$data = array(
		'issueData' => $issueData,
		'status_message' => ""
		);
	
		$this->load->view('issuesedit_view',$data);	
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
		
		$NAME = $this->input->post('NAME');
		$PUBLICATION_UUID = $this->input->post('PUBLICATION_UUID');
		$NAME = $this->input->post('NAME');
		$TITLE = $this->input->post('TITLE');
		$INFO = $this->input->post('INFO');
		$DATE = $this->input->post('DATE');
		$COVER = $this->input->post('COVER');
		$URL = $this->input->post('URL');
		$ITUNES_SUMMARY = $this->input->post('ITUNES_SUMMARY');
		$ITUNES_COVERART_URL = $this->input->post('ITUNES_COVERART_URL');
		$ITUNES_PUBLISHED = $this->input->post('ITUNES_PUBLISHED');
		$ITUNES_UPDATED = $this->input->post('ITUNES_UPDATED');

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
					'PUBLICATION_UUID' => $PUBLICATION_UUID,
					'NAME' => $NAME,
					'TITLE' => $TITLE,
					'INFO' => $INFO,
					'DATE' => $DATE,
					'COVER' => $COVER,
					'URL' => $URL,
					'ITUNES_SUMMARY' => $ITUNES_SUMMARY,
					'ITUNES_COVERART_URL' => $ITUNES_COVERART_URL,
					'ITUNES_PUBLISHED' => $ITUNES_PUBLISHED,
					'ITUNES_UPDATED' => $ITUNES_UPDATED		
	            );
				
			$this->load->library('table');
			
			if($ID != 0)
			{
				$this->db->where('ID', $ID);
				$this->db->update('ISSUES', $data); 
			}
			else
			{
				$this->db->insert('ISSUES', $data);
				$ID = $this->db->insert_id();
			}
			
			redirect('/issues/load/' . $PUBLICATION_UUID);
		//}
	}
	
	function printArray($array, $devolver = false)
	{
		$string = '<pre>' . print_r($array, true) . '</pre>';
		if($devolver) return $string;
		else echo $string;
	}
}
