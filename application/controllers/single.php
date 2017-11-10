<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class single extends CI_Controller {

	function single(){
		parent::__construct();
		//1,如果不添加这个方法，在前端使用url的时候会出问题
		$this->load->helper('url');
		$this->load->model('singleModel');
	}

	public function index()
	{
		$data['productMsg'] = $this->singleModel->getProduct("product");
		$data['imagesMsg'] = $this->singleModel->getImages("images");
		$this->load->view('single',$data);
	}
}
