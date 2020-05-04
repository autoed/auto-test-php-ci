<?php
/**
 * Class User
 * User:  fomo3d.wiki
 * Email: fomo3d.wiki@gmail.com
 * Date: 2020/5/2
 */
class User extends CI_Controller
{
    /**
     * 开启auto API Document
     */
    use Auto\Api;

    /**
     * TEST Demo
     * @AD array('say'=>'我爱你,','name'=>'伟大的祖国！')
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/4
     */
    public function test_ok()
    {
        //调用案例：
        if (false) {
            /**
             * @var Auto\Data $data
             */
            $data = Auto\Auto::data();

            /**
             * Ms. Demetris Dickens
             */
            $data::name();

            /**
             * 9113 Greenfelder Inlet\nMaudiehaven, NE 56622
             */
            $data::address();
        }

        //接收数据
        $params =  $_POST;

        //返回数据
        Respond::ok($params);
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
        //接收数据
        $params =  $_GET;

        //返回数据
        Respond::ok($params);
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
        //接收数据
        $params =  $_POST;

        //返回数据
        Respond::ok($params);
	}
}

/**
 * class Respond
 * User:  fomo3d.wiki
 * Email: fomo3d.wiki@gmail.com
 * Date: 2020/5/3
 */
class Respond
{
    public static function ok($params, $msg='')
    {
        header('Content-type: application/json');

        echo json_encode(array('code'=> 200, 'msg' => $msg, 'obj' => $params), JSON_UNESCAPED_UNICODE);
    }
}
