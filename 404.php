<?php
session_start();
if ($_SESSION['count']!=1) {
    echo '非法访问';
    exit;
} 
$_SESSION['count'] ='';


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>系统维护中</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no minimal-ui">
    <style>
        .container {
			display: flex;
			justify-content: center;
			flex-direction: column;
			align-items: center;
            width: 60%;
			max-width: 60%;
			min-width: 320px;
            margin: 10% auto 0;
            background-color: #f0f0f0;
            padding: 2% 5%;
            border-radius: 10px
        }
		h3{
			margin-top: 15px;
		}
    </style>
</head>
<body>
    <div class="container">
		<img src="./assets/img/404.png" alt="">
        <h3>系统维护中,暂时关闭站点</h3>

    </div>
</body>
</html>