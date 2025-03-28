<?php

class CustomersController Extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	}
	
	public function index() {
		$this->load->database();
		$data['page'] = "Suppliers";
		$data['customers'] = $this->db->order_by('id','DESC')->get('customers')->result();
 		$data['content'] = "customers/index";
		$this->load->view('master',$data);

	}

	public function insert() {
		$this->load->database();
		$data = array(
				'name' =>	$this->input->post('name'),
				'studentNumber' => $this->input->post('studentNumber'),
				'yearLevel' => $this->input->post('yearLevel'),
				'itemPurchased' => $this->input->post('itemPurchased'),
				'itemSize' => $this->input->post('itemSize'),
				'quantity' => $this->input->post('quantity'),  
			);

		$this->db->insert('customers',$data);

		$this->session->set_flashdata('success','Customer added Successfully');
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function update() {
		$this->load->database();
		$data = array(
				'name' =>	$this->input->post('name'),
				'studentNumber' => $this->input->post('studentNumber'),
				'yearLevel' => $this->input->post('yearLevel'),
				'itemPurchased' => $this->input->post('itemPurchased'),
				'itemSize' => $this->input->post('itemSize'),
				'quantity' => $this->input->post('quantity'),  
			);

		$this->db->where('id',$this->input->post('customer_id'))->update('customers',$data);
 
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function destroy($id) {
		$this->load->database();

		$this->db->delete('customers',array('id' => $id));

		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function find() {

		$this->load->database();

		$customer = $this->db->where('id',$this->input->post('id'))->get('customers')->row();

		echo json_encode($customer);
	}

}