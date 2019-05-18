<?php
	/**
	 * 
	 */
	class SalesDataModel extends CI_Model
	{
		public function getTotalCountry(){
			return $this->db->query("SELECT COUNT(*) as counts FROM (SELECT DISTINCT retailer_country FROM sales_data) AS sales_data")->row();
		}		
	}
?>