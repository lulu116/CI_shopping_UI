<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	function HomeController(){
		parent::__construct();
		//1,如果不添加这个方法，在前端使用url的时候会出问题
		$this->load->helper('url');
	}

	public function index()
	{
		echo "你好，我叫露露";
		//$this->load->view('home');
	}
}
