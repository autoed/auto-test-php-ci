<?php

use SebastianBergmann\Comparator\Factory;

defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	/**
	 * hello Demo
	 * @AD array('say'=>$data::bankAccountNumber(),'name'=>$data::name())
	 * @Author: LiDi at 2019/10/22 13:22
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
}
