<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News archive';
		//echo"this is controller";
		$this->load->view("admin/layout/dashboard_header.php");
		$this->load->view('news/index', $data);
		$this->load->view('admin/layout/footer.php');
	}

	public function view($slug)
	{
		$data['news'] = $this->news_model->get_news($slug);
	}
}