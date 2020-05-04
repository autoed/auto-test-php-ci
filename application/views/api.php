<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
</head>
<body>
<div class="container">
    <h1>Welcome to auto api !</h1>
    <div id="body">
        <p>
            <?php
            echo $notice;
            ?>
        </p>
        <p>
            <?php
            /**
             * APi 模块 配置
             */
            $module = array(
                'user'   => '用户模块',
                'meeting'=> '会议模块',
            );
            $host = AUTO_TEST_API_HOST;
            array_map(function ($item) use ($host) {
                $url = $host . '/'.$item.'/api';
                echo '<a href="'.$url.'">'.$url.'</a>'.'<br><br>';
            }, array_keys($module));
            ?>
        </p>
    </div>
</div>
</body>
</html>