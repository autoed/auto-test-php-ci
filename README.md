
# Auto Test for CI Demo
* Auto, 懒人化测试PHP代码

* 不仅仅只适合Ci ( Not Just For Ci ! ) 

* You can make it for other frameworks. Delivered as php-extensions.


## Install
* composer require auto/ci

* composer update


## Added to CI
* 在 `system\core\CodeIgniter.php`文件
* 这行代码上面：call_user_func_array(array(&$CI, $method), $params); 放入以下代码
```$php

      //执行测试模式
	if (AUTO_TEST_START) {
		try{
			$realArr = Auto\Auto::_auto(new $class, $method);
		} catch (\Exception $e) {
		//记录执行错误Log
		echo $e->getMessage();die;
		}
		$params = array();
		$params['data'] = $realArr;
	}
```
* 在`index.php`文件
* 加入下面的代码
```
/**
 * 开启注释测试模式
 */
define('AUTO_TEST_START', true);

/**
 * 开启自动加载
 */
require_once __DIR__.'/vendor/autoload.php';
```

## Start Auto Test Demo ^_~:
### 举个栗子：
* 1、编辑`application\controllers\Welcome.php`
```
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
		//调用提示案例：
		if (false) {
			$data = Auto\Auto::data();
                        //$data的方法我会渐进式开发、完善
                        //Email: lidi.bj@acewill.cn
                        //OtherEmail: fomo3d.wiki@gmail.com
			echo $data::name();
			echo $data::bankAccountNumber();
		}
	}
```
* 2、编辑`application\views\welcome_message.php`
```
<body>
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	<div id="body">
		<p>
			<?php
			foreach ($title as$item) {
				echo $item . PHP_EOL;
			}
			?>
		</p>
	</div>
</div>
</body>
```
* 3、访问：http://xxxxxx/index.php
##### 输出类似下面内容，恭喜你成功啦！
```
Welcome to CodeIgniter!

26237202866165 Vicente Ankunding
```
## Notice Help:

### 目前支持3种格式
* 1、普通参数传递：@AD 
##### ①、万能参数：（详细：请参考上面的栗子）
```
@AD array('say'=>$data::bankAccountNumber(),'name'=>$data::name())
```
##### ②、固定参数：
```
@AD array('say'=>'我爱你,','name'=>'伟大的祖国！')
```
* 2、GET参数传递：@GET 
```
@GET $_GET['luck'] = 28
```

* 3、POST参数传递：@POST 
```
@GET $_POST['email'] = 'fomo3d.wiki@gmail.com'
```

*
*
* 待续...ing



