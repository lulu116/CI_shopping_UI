<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	function HomeController(){
		parent::__construct();
		//1,如果不添加这个方法，在前端使用url的时候会出问题
		$this->load->helper('url');
		$this->load->model("homeModel");
	}
	public function index()
	{
		//echo "你好，我叫露露";
		//$this->load->view('home');
		//大轮播图
		$data['slide'] = $this->homeModel->slider("images",58,60);
		//图片ID和本身主图
		$data['static_small_slider'] = $this->homeModel->static_small_slider("images",61,64);
		//找到产品表ID与图片ID对应
		foreach($data['static_small_slider'] as $eachId){
			$productID = $eachId['product_id'];
			//找到图片对应的ID从产品表中获得该产品信息
			$data['productMsg'] = $this->homeModel->productId('product',$productID);
		}
		//动态小轮播图
		$data['static_small_slider1'] = $this->homeModel->static_small_slider("images",65,68);
        //动态小轮播图1
		$data['dynamics_small_slider'] = $this->homeModel->static_small_slider("images",77,84);
		foreach($data['dynamics_small_slider'] as $eachId1){
			$productID1 = $eachId1['product_id'];
			//找到图片对应的ID从产品表中获得该产品信息
			$data['productMsg1'] = $this->homeModel->productId('product',$productID1);
		}
		$this->load->view("home",$data);
	}

}
