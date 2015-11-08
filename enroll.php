<!DOCTYPE html>
<html>
<head>
	<title>注册账号</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="description" content=""/>	<!--这一行以及下一行的含义是让一些搜索引擎搜索到你的网页-->
	<meta name="keywords" content=""/>
	<meta name="save" content="history">

	<link href="bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

	<style type="text/css">

		.col-md-12{
			height: 800px;
			background-color: white;
		}

		.col-md-3{
			height: 500px;
			background-color: rgba(28, 34, 220, 0.16);
			margin-top:20px;
			border-radius:25px 0px 0px 25px;
			border-left:1px solid rgba(117, 122, 160, 0.19);
			border-top:1px solid rgba(117, 122, 160, 0.19);
			border-bottom:1px solid rgba(117, 122, 160, 0.19);
		}

		.col-md-9{
			height: 800px;
			background-color: rgba(88, 194, 228, 0.12);
			margin-top:20px;
			border-left:1px solid rgba(155, 189, 191, 0.34);
			border-right:1px solid rgba(155, 189, 191, 0.34);
			border-top:1px solid rgba(155, 189, 191, 0.34);
			border-bottom:1px solid rgba(155, 189, 191, 0.34);
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="column">
					<div class="col-md-3">
						<br/><br/><br/><br/>
						<font face="方正舒体" size="40px" >耽美<br/>&nbsp&nbsp&nbsp俱乐部</font>
						<font face="Broadway" size="25px"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspB&nbspL</center></font><br/>
						<font face="华文行楷" size="40px" color="#FF3300">欢迎你~~~</font>
					</div>
				</div>
				<div class="column">
					<div class="col-md-9">
						<br/>
						<font face="黑体" size="5px">&nbsp&nbsp&nbsp注册账号</font><br/>
						<p align="right">已注册&nbsp&nbsp<a href="land.php">登陆</a></p>
						<hr  style="borber:1px solid black;"><br/>
						<div class="container">
							<form action="enroll_back.php" method="post">
								<font size="4px" face="华文细黑">用户名</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username"  style="width:280px;height:40px;" value="<?php if(isset($_POST['username']))echo $_POST['username'];?>"/>
								<font size="3px" face="黑体">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp用户名由汉字、英文字母、数字、下划线构成</font>
								<br/><br/><br/>
								<font size="4px" face="华文细黑">密码</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="userpassword"  style="width:280px;height:40px;" />
								<font size="3px" face="黑体">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp密码由英文字母、数字构成</font>
								<br/><br/><br/>
								<font size="4px" face="华文细黑">再次输入密码</font>&nbsp&nbsp&nbsp<input type="password"  name="password" style="width:280px;height:40px;"/>
								<br/><br/><br/>
								<font size="4px" face="华文细黑">请选择性别:</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<select name="sex">
										<option value="male" id="male">男</option>
										<option value="female" id="female">女</option>
									</select>
								<br/><br/><br/>
								<font size="4px" face="华文细黑">认证邮箱</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="useremail"  style="width:280px;height:40px;" value="<?php if(isset($_POST['useremail']))echo $_POST['useremail'];?>"/>
								<br/><br/><br/><br/>
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" class="btn btn-primary" name="submit2" value="注册" style="width:480px;height:40px;"/>
							</form>
							<br/><br/><br/><br/><br/><br/>
							<center>
								<a href="#">关于耽美</a>&nbsp|&nbsp<a href="#">耽美贴吧</a>&nbsp|&nbsp<a href="#">耽美群信息</a>&nbsp|&nbsp<a href="#">本俱乐部官方邮箱：xxxxxx@163.com</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

