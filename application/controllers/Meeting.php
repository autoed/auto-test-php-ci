<?php

/**
 * Class Meeting
 * User:  fomo3d.wiki
 * Email: fomo3d.wiki@gmail.com
 * Date: 2020/5/5
 */
class Meeting extends CI_Controller
{
    /**
     * 开启auto API Document
     */
    use Auto\Api;

    /**
     * GET meeting
     * @GET array('email'=>$data::email())
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/4
     */
	public function getMeetingInfo()
	{
        //接收数据
        $params =  $_GET;

        //返回数据
        Respond::ok($params);
	}

    /**
     * POST meeting
     * @POST array('name'=>$data::name())
     * User:  fomo3d.wiki
     * Email: fomo3d.wiki@gmail.com
     * Date: 2020/5/4
     */
	public function postMeetingAdd()
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
