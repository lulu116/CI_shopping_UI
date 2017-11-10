<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {

	function ProductController(){
		parent::__construct();
		//1,如果不添加这个方法，在前端使用url的时候会出问题
		$this->load->helper('url');
		$this->load->model('productModel');
	}

	public function index()
	{
		$data['static_small_slider'] = $this->productModel->static_small_slider("images",77,84);
		$this->load->view('products',$data);
	}
}
