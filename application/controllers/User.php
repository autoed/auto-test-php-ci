<?php

/**
 * Class User
 * User:  fomo3d.wiki
 * Email: fomo3d.wiki@gmail.com
 * Date: 2020/5/2
 */
class User extends CI_Controller {

	/**
	 * Index
	 * @param array $params //传入参数（自动从下面获取）
	 * @AD array('say'=>$data::bankAccountNumber(),'name'=>$data::name())
	 */
	public function index($params)
	{
		$say  = $params['say'];
		$name = $params['name'];
		$data['title'] =  array($say,$name);
		$this->load->view('welcome_message', $data);
		//调用案例：
		if (false) {
			$data = Auto\Auto::data();
			echo $data::name();
			echo $data::bankAccountNumber();
		}
	}

	/**
	 * GET Demo
	 * @GET $_GET['say']=$data::bankAccountNumber();$_GET['name']=$data::name();
	 * @var $say  string 选择 : hello
	 * @var $name string 选择 : world
	 */
	public function get_ok()
	{
		$say  = $_GET['say'];

		$name = $_GET['name'];

		$data['title'] =  array($say,$name);

		$this->load->view('welcome_message', $data);
	}

	/**
	 * POST Demo
	 * @POST $_POST['say']=$data::bankAccountNumber();$_POST['name']=$data::name();
	 * @var $say  string 选择 : hello
	 * @var $name string 选择 : world
	 */
	public function post_ok()
	{
		$say  = $_POST['say'];

		$name = $_POST['name'];

		$data['title'] =  array($say,$name);

		$this->load->view('welcome_message', $data);
	}
}
