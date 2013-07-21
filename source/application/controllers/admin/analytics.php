<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Analytics extends Admin_Controller {

    public function index() {
        $this->load->model('crud_auth');
        $this->load->model('admin/home_menu');

        $var = array();

		  $table_view_head = "<table class='table'>
		    <thead>
		    <tr>
		    <th>Name</th>
		    <th>Issue Purchases</th>
		    <th>Subscription Purchases</th>
		    <th>Issue Downloads</th>
		    <th>API Interactions</th>
		    </tr>
		    </thead>
		    <tbody>";

		  //Get list of publications
		  
			  //Loop through publications and gather statistics
			  $issue_purchases = 4;
			  $subscription_purchases = 15;
			  $issue_downloads = 500;
			  $api_interactions = 29888;		  
			  
			  //Build Table Row		  
			  
			  $table_view_body = "<tr>
			    <td>MagRocket Magazine</td>   
			    <td><div class='pagination-centered'>" . $issue_purchases . "</div></td>   
			    <td><div class='pagination-centered'>" . $subscription_purchases . "</div></td>  
			    <td><div class='pagination-centered'>" . $issue_downloads . "</div></td>
			    <td><div class='pagination-centered'>" . $api_interactions . "</div></td>
			    </tr>";
		  
		  $table_view_footer = "</tbody></table>";
		  
        $var['publications_table'] = $table_view_head . $table_view_body . $table_view_footer;        
        
        $var['main_menu'] = $this->home_menu->fetch('tools');
        $var['main_content'] = $this->load->view('admin/common/analytics',$var,true);

        $this->load->view('layouts/admin/default', $var);
    }

}