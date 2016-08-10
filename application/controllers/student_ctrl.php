<?php
class student_ctrl extends CI_Controller {
	function __construct()
   	{
		parent::__construct();
		$this->load->model('student_model');
	}
		
	function index()
	{
		//echo "tt";
		//exit();
		$data['students'] = $this->student_model->get_student();
		$data['title'] = 'Student archive';
		$this->load->view("admin/layout/dashboard_header.php");
		$this->load->view("student/index.php",$data);
		//$data['student'] = $this->student_model->get_student();
		$this->load->view('admin/layout/footer.php');
		//print_r($data);
	}
	public function view($id)
	{
		$data['student'] = $this->student_model->get_student($id);
		$data['title'] = 'Student archive';
		$this->load->view("admin/layout/dashboard_header.php");
		//$this->load->view("student/index.php",$data);
		print_r($data);
		$this->load->view('admin/layout/footer.php');
	}
	
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Create a news item';
	
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('fname', 'fname', 'required');
		$this->form_validation->set_rules('class', 'class', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view("admin/layout/dashboard_header.php");
			$this->load->view('student/create.php');
			$this->load->view('admin/layout/footer.php');
	
		}
		else
		{
			$this->student_model->set_student();
			//$this->load->view('student/success');
                        redirect('student_ctrl','refresh');
		}
	}
	
	public function delete($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
                $this->student_model->delete_student($id);
               // $this->load->view('student/success');
               redirect('student_ctrl','refresh');   

	}

	public function update($id=false)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Update item';
		
                
		//$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('fname', 'fname', 'required');
		$this->form_validation->set_rules('class', 'class', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$data['student'] = $this->student_model->get_student($id);
                        //print_r($data['student']);
                        $this->load->view("admin/layout/dashboard_header.php");
			$this->load->view('student/update.php',$data);
			$this->load->view('admin/layout/footer.php');
	
		}
		else
		{
			
			$this->student_model->update_student($id);
                        $this->session->set_userdata(array(
                            'sess_ci_admin_msg' => "Student Updated ",
                            'sess_ci_admin_msg_type' => 'success',
                            //'sess_ci_admin_islogged' => false
                        ));
			redirect('student_ctrl','refresh');
		
		}
	}
        public function home()
        {
            $this->load->view("admin/layout/dashboard_header.php");
            $this->load->view('student/success.php');
            $this->load->view('admin/layout/footer.php');
        }


}
