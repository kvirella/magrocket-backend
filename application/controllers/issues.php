<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issues extends CI_Controller {

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
 
		$query = $this->db->query("SELECT * FROM ISSUES WHERE PUBLICATION_UUID = '" . $UUID . "'");
		
		         /*<table class="table">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th>First Name</th>
				          <th>Last Name</th>
				          <th>Username</th>
				          <th style="width: 26px;"></th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td>1</td>
				          <td>Mark</td>
				          <td>Tompson</td>
				          <td>the_mark7</td>
				          <td>
				              <a href="user.html"><i class="icon-pencil"></i></a>
				              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
				          </td>
				        </tr>
				      </tbody>
				    </table> */
          
          
		$tmpl = array (
                    'table_open'          => '<table class="table">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr>',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'table_close'         => '</table>'
              );
              
		$this->table->set_template($tmpl);
		
		$this->table->set_heading('Name','Title', 'Info', 'Date', 'Action');			
									
		foreach ($query->result() as $row)
		{
	       			
		   $actionCell="<a href=\"/issuesedit/edit/" . $row->ID . "\" title=\"Edit Issue\"><i class=\"icon-pencil\"></i></a>
		   			    <a href=\"/issues/delete/" . $row->ID . "/" . $UUID . "\" title=\"Delete Issue\" onclick=\"return confirm('Are you sure you want to delete this issue?');\"><i class=\"icon-remove\"></i></a>";
                        
		   $this->table->add_row($row->NAME, $row->TITLE, $row->INFO, $row->DATE, $actionCell);   
		}
		
		$data = array(
		'issues_table' => $this->table->generate(),
		'PUBLICATION_UUID' => $UUID
		);

		$this->load->view('issues_view',$data);
				
	}
	
	function delete($ID, $UUID)
    {		
    	$this->db->where('ID', $ID);
		$this->db->delete('ISSUES'); 

		$this->_loadview($UUID);
	}
	
	function printArray($array, $devolver = false)
	{
		$string = '<pre>' . print_r($array, true) . '</pre>';
		if($devolver) return $string;
		else echo $string;
	}
}
