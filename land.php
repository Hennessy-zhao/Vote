<!DOCTYPE html>
<html>
<head>
	<title>登录系统</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="description" content=""/>	<!--这一行以及下一行的含义是让一些搜索引擎搜索到你的网页-->
	<meta name="keywords" content=""/>

	<link href="bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<style type="text/css">
	#top.col-md-12{
		background-color: rgba(133, 133, 165, 0.14);;
		height: 60px;
		border-bottom:1px solid #9999FF;
	}
	#body.col-md-12{
		background-color:white;
		height: 500px;
		
	}

			#body-left.col-md-4{
				background-color:white;
				height: 500px;
				text-align: center;
		
			}


			#body-middle.col-md-3{
				background-color:white;
				height: 500px;
		
			}


			#body-right.col-md-5{
				background-color:white;
				height: 500px;
		
			}

						#body-right-body{
							width: 400px;
							height: 460px;
							border-radius:25px 25px 25px 25px;
							border-left:1px solid rgba(117, 122, 160, 0.82);
							border-right:1px solid rgba(117, 122, 160, 0.82);
							border-top:1px solid rgba(117, 122, 160, 0.82);
							border-bottom:1px solid rgba(117, 122, 160, 0.82);
							margin-top: 20px;
							margin-left: 40px;
						}



	#button.col-md-12{
		background-color: rgba(90, 125, 125, 0.15);
		height: 30px;
		border-top:1px solid rgba(130, 173, 173, 0.33);
	}




	</style>
</head>
<body>
	
		<div class="row">
			<div class="row">
				<div class="col-md-12" id="top">
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<font face="Broadway" size="15px">BL</font>	<font face="华文行楷" color="blue" size="5px">耽美俱乐部</font>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" id="body">
					<div class="container">
						<div class="column">
								<div class="col-md-4" id="body-left">
									<br/><br/><br/><img src="012.jpg" width="280px" height="400px" class="img-circle">
								</div>
						</div>
						<div class="column">
								<div class="col-md-3" id="body-middle">
								
								<font size="4px" face="华文行楷"><br/><br/><br/><br/><br/><br/>&nbsp&nbsp&nbsp&nbsp曾经我们让男人来决定女人该不该受教育，白人决定黑人能不能活下去，后来我我们都认为这是荒诞的。
									<br/><br/><br/>&nbsp&nbsp&nbsp&nbsp如今，我们却又让异性恋来决定同性恋能不能相爱
									</font>
								</div>
						</div>
						<div class="column">
								<div class="col-md-5" id="body-right">
									<div class="container" id="body-right-body">
										<br/><center><font size="5px" face="华文楷体">耽美俱乐部登陆</font></center>
										<hr align="center" size="1px" width="380px"  nashade="noshade" id="hr"><br/>
										<form action="land_back.php" method="post">
											<font size="4px" face="华文细黑">用户名&nbsp&nbsp&nbsp<input type="text" name="username" style="width:280px;height:40px;" /><br/><br/><br/>
											密码&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="userpassword"  style="width:280px;height:40px;"/><br/><br/><br/>
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<input type="submit" class="btn btn-primary" name="submit1" value="登陆" style="width:280px;height:40px;"/>

											</font>
										</form>
										<br/><br/><br/><br/>
										<p align="right"><a href="#">忘了密码？</a>&nbsp|&nbsp<a href="enroll.php">注册账号</a>&nbsp|&nbsp<a href="#">意见反馈</a></p>
									</div>
								</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" id="button">
					<center>
						<a href="#">关于耽美</a>&nbsp|&nbsp<a href="#">耽美贴吧</a>&nbsp|&nbsp<a href="#">耽美群信息</a>&nbsp|&nbsp<a href="#">本俱乐部官方邮箱：xxxxxx@163.com</a>
					</center>
				</div>
			</div>
		</div>
	

	
</body>
</html>

