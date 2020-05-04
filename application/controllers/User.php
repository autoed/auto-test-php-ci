<?php

/**
 * class Respond
 * User:  fomo3d.wiki
 * Email: fomo3d.wiki@gmail.com
 * Date: 2020/5/3
 */
class Respond
{
    public static function ok($data, $msg='')
    {
        header('Content-type: application/json');
        echo json_encode(array('code'=> 200, 'msg' => $msg, 'obj' => $data), JSON_UNESCAPED_UNICODE);
    }
}
/**
 * Class User
 * User:  fomo3d.wiki
 * Email: fomo3d.wiki@gmail.com
 * Date: 2020/5/2
 */
class User extends CI_Controller
{
	/**
	 * api
     * @notice You should know , this api is useful !
	 */
	public function api()
	{
        //调用案例：
        if (false) {
            $data = Auto\Auto::data();
            echo $data::name();
            echo $data::bankAccountNumber();
        }
		$this->load->view('api', array('notice'=>'You should know , this api is useful !'));
	}

    /**
     * TEST Demo
     * @AD array('name'=>'Luck','address'=>'Beijing')
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/4
     */
    public function test_ok()
    {
        $data =  $_POST;
        Respond::ok($data);
    }

    /**
     * GET Demo
     * @GET array('num'=>$data::bankAccountNumber(),'email'=>$data::email())
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/4
     */
	public function get_ok()
	{
        $data= $_GET;
        Respond::ok($data);
	}

    /**
     * POST Demo
     * @POST array('name'=>$data::name(),'address'=>$data::address())
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/4
     */
	public function post_ok()
	{
		$data =  $_POST;
        Respond::ok($data);
	}
}
