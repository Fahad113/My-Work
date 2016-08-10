<?php
class student_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_student($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('student');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('student', array('id' => $id));
		return $query->row_array();
	}
	
	public function set_student()
	{
		$this->load->helper('url');
		$data = array(
                                'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'fname' => $this->input->post('fname'),
				'class' => $this->input->post('class'),
				'address' => $this->input->post('address')
		);
	
		return $this->db->insert('student', $data);
	}
	
	public function delete_student($id)
	{
		//$id=$this->input->post('id');
		$this->db->where('id',$id);
		 $this->db->delete('student');
                 //redirect('application/views/student/index.php', 'refresh');
	}

	public function update_student($id=FALSE)
	{
		$this->load->helper('url');
		//$id=$this->input->post('id');
		$data = array(
				'name' => $this->input->post('name'),
				'fname' => $this->input->post('fname'),
				'class' => $this->input->post('class'),
				'address' => $this->input->post('address')
		);
		
		 $this->db->where('id', $id);
		 $this->db->update('student', $data);
	}
}