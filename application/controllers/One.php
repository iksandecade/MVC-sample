<?php 
	/**
	 * 
	 */
	class One extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('SalesDataModel');
		}

		function index(){
			$data['total']	= $this->SalesDataModel->getTotalCountry()->counts;			
			$this->load->view('one_view', $data);
		}
	}
?>