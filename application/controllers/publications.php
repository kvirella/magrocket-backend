<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publications extends CI_Controller {

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
	
	function _loadview()
	{
		$user = $this->ion_auth->user()->row();
		$user_account_uuid = $user->ACCOUNT_UUID;
         		
		$this->load->helper(array('form', 'url', 'date'));

		$this->load->library('table');
 
		$query = $this->db->query("SELECT * FROM PUBLICATION WHERE ACCOUNT_UUID = '" . $user_account_uuid . "'");
		
		
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
		
		$this->table->set_heading('Publication Name','Publication ID','Action');			
									
		foreach ($query->result() as $row)
		{
	       			
		   $actionCell="<a href=\"/issues/load/" . $row->UUID . "\"><i class=\"icon-list\" title=\"View Issues\"></i></a>
							 <a href=\"/pushnotifications/load/" . $row->UUID . "\" title=\"Push Notifications\"><i class=\"icon-share\"></i></a>		   
		   				 <a href=\"/publicationsedit/edit/" . $row->UUID . "\" title=\"Edit Publication\"><i class=\"icon-pencil\"></i></a>
		   				 <a href=\"/publications/delete/" . $row->UUID . "\" title=\"Delete Publication\" onclick=\"return confirm('Are you sure you want to delete this publication?');\"><i class=\"icon-remove\"></i></a>";
                        
		   $this->table->add_row($row->NAME, $row->UUID, $actionCell);   
		}
		
		$data = array(
		'publications_table' => $this->table->generate()
		);

		$this->load->view('publications_view',$data);
				
	}
	
	function delete($UUID)
    {
    	$user = $this->ion_auth->user()->row();
		$user_account_uuid = $user->ACCOUNT_UUID;
		
    	$this->db->where('UUID', $UUID);
		$this->db->where('ACCOUNT_UUID', $user_account_uuid);
		$this->db->delete('PUBLICATION'); 

		$this->_loadview();
	}
	
	function printArray($array, $devolver = false)
	{
		$string = '<pre>' . print_r($array, true) . '</pre>';
		if($devolver) return $string;
		else echo $string;
	}
}
