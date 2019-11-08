<?php

use SebastianBergmann\Comparator\Factory;

defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	/**
	 * Index
	 * @param array $params //传入参数（自动从下面获取）
	 * @AD array('say'=>$data::bankAccountNumber(),'name'=>$data::name())
	 * @Author: LiDi at 2019/11/8 11:31
	 * @Email : lidi.bj@acewill.cn
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
	 * @Author: LiDi at 2019/10/22 13:22
	 * @Email : lidi.bj@acewill.cn
	 */
	public function get_demo()
	{
		$say  = $_GET['say'];

		$name = $_GET['name'];

		$data['title'] =  array($say,$name);

		$this->load->view('welcome_message', $data);
	}

	/**
	 * POST Demo
	 * @GET $_POST['say']=$data::bankAccountNumber();$_POST['name']=$data::name();
	 * @var $say  string 选择 : hello
	 * @var $name string 选择 : world
	 * @Author: LiDi at 2019/10/22 13:22
	 * @Email : lidi.bj@acewill.cn
	 */
	public function post_demo()
	{
		$say  = $_POST['say'];

		$name = $_POST['name'];

		$data['title'] =  array($say,$name);

		$this->load->view('welcome_message', $data);
	}

	/**
	 * AD  Demo
	 * @AD array('say'=>$data::bankAccountNumber(),'name'=>$data::name())
	 * @var
	 * @Author: LiDi at 2019/10/22 13:22
	 * @Email : lidi.bj@acewill.cn
	 */
	public function ad_demo($params)
	{
		$say  = $params['say'];

		$name = $params['name'];

		$data['title'] =  array($say,$name);

		$this->load->view('welcome_message', $data);
	}
}
