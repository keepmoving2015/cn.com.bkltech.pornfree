<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="http://192.168.0.129:8080/thinkox4/index.php?s=/usercenter/config/index" method="post" enctype="multipart/form-data">
		uid: <input type="text" name="uid" />
		昵称：<input type="text" name="nickname" /><br />
		年龄：<input type="text" name="age" /><br />
		撸龄：<input type="text" name="age_lu" /><br />
		性别：<input type="text" name="sex" /><br />
		1：<input type="text" name="province" /><br />
		2：<input type="text" name="city" /><br />
		2：<input type="text" name="district" /><br />
		2：<input type="text" name="community" /><br />
		头像：<input type="file" name="image" /><br />
		<input type="submit" value="tijiao" />	
	</form>
</body>
</html>