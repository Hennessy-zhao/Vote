<?php
	 require"MysqlTool.php";
	$MysqliTool8=new MysqliTool();
	$sql="select vote from votes where nameid=1";
	$res=$MysqliTool8->execute_dql($sql);
	while($row=$res->fetch_assoc())
	{
			global $vote1;
			$vote1=$row['vote'];

	}


	$sql="select vote from votes where nameid=2";
	$res=$MysqliTool8->execute_dql($sql);
	while($row=$res->fetch_assoc())
	{
			global $vote2;
			$vote2=$row['vote'];
	}


	$sql="select vote from votes where nameid=3";
	$res=$MysqliTool8->execute_dql($sql);
	while($row=$res->fetch_assoc())
	{
			global $vote3;
			$vote3=$row['vote'];
	}


	$sql="select vote from votes where nameid=4";
	$res=$MysqliTool8->execute_dql($sql);
	while($row=$res->fetch_assoc())
	{
			global $vote4;
			$vote4=$row['vote'];
	}


	$sql="select vote from votes where nameid=5";
	$res=$MysqliTool8->execute_dql($sql);
	while($row=$res->fetch_assoc())
	{
			global $vote5;
			$vote5=$row['vote'];
	}

	$sql="select vote from votes where nameid=6";
	$res=$MysqliTool8->execute_dql($sql);
	while($row=$res->fetch_assoc())
	{
			global $vote6;
			$vote6=$row['vote'];
	}

	$sql="select vote from votes where nameid=7";
	$res=$MysqliTool8->execute_dql($sql);
	while($row=$res->fetch_assoc())
	{
			global $vote7;
			$vote7=$row['vote'];
	}

	$sql="select vote from votes where nameid=8";
	$res=$MysqliTool8->execute_dql($sql);
	while($row=$res->fetch_assoc())
	{
			global $vote8;
			$vote8=$row['vote'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>投票系统</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="description" content=""/>	<!--这一行以及下一行的含义是让一些搜索引擎搜索到你的网页-->
	<meta name="keywords" content=""/>

	<link href="bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

	<style type="text/css">

	a.a1:visited{
		color: black;
		text-decoration: none;
	}

	a.a1:link{
		color: black;
		
		}

	a.a1:hover{
		color:blue;
		text-decoration: underline;
	}

	#user.col-md-12{
		height: 80px;
		background-color:white;
		margin-top: 10px;
	}

	#top.col-md-12{
		height: 230px;
		background-color: rgba(86, 86, 216, 0.15);
		border-top: 1px solid rgba(0, 0, 255, 0.09);
		border-bottom: 1px solid rgba(0, 0, 255, 0.09);
		border-left: 1px solid rgba(0, 0, 255, 0.09);
		border-right: 1px solid rgba(0, 0, 255, 0.09);
		border-radius:15px 15px 0px 0px;
	}

				#topp.col-md-3{
					height: 230px;
					background-color: rgba(0, 0, 255, 0);
				}


				#topp.col-md-9{
					height: 230px;
					background-color:rgba(0, 0, 255, 0);
				}

	#space.col-md-12{
		height: 60px;
		background-color:white;
		border-top: 1px solid rgba(0, 0, 255, 0.09);
		border-bottom: 1px solid rgba(0, 0, 255, 0.09);
		border-left: 1px solid rgba(0, 0, 255, 0.09);
		border-right: 1px solid rgba(0, 0, 255, 0.09);
	}


	#body.col-md-12{
		height: 1550px;
		background-color: rgba(86, 86, 216, 0.15);
		border-top: 1px solid rgba(0, 0, 255, 0.09);
		border-bottom: 1px solid rgba(0, 0, 255, 0.09);
		border-left: 1px solid rgba(0, 0, 255, 0.09);
		border-right: 1px solid rgba(0, 0, 255, 0.09);
		border-radius:0px 0px 15px 15px;
	}

				#body-top.col-md-12{
					height: 850px;
					background-color:rgba(0, 0, 255, 0);
					font-size: 18px;
					font-family: 华文细黑;
				}
				#body-bottom.col-md-12{
					height: 700px;
					background-color: rgba(0, 0, 255, 0);
					font-size: 18px;
					font-family: 华文细黑;
					border-radius:0px 0px 15px 15px;
				
				}


	#bottom.col-md-12{
		height: 50px;
		background-color: white;
	}

	li{
		list-style:none;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="user">
				<p align="right" style="font-size='5px">
					<br/>
					<?php
						echo $_SESSION['name'];
					?>
					&nbsp|&nbsp
					<a class="a1" href="#">会员详情</a>
					&nbsp|&nbsp
					<a class="a1" href="land.php" onclick="return confirm('确定退出吗？')">退出</a>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="top">
				<div class="column">
					<div class="col-md-9" id="topp">
						<br/><br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<font size="6px" face="华文隶书">选出你</font><font size="10px" face="华文琥珀" color="blue">最</font><font size="5px" face="华文隶书">喜欢的</font>
						<br/>
						<font size="8px" face="华文行楷"><center>耽美作家</center></font>
					</div>
				</div>
				<div class="column">
					<div class="col-md-3" id="topp">
						<br/>
						<p align="right">
						<img src="006.jpg" width="220px" height="220px" class="img-circle">
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="space">
				<br/>
				<font size="4px" face="华文细黑">『发起人』&nbsp&nbsp <a class="a1" href="http://tieba.baidu.com/home/main?id=ca817acbead4c2beb2bac37aaa25&fr=userbar">z岁月静好z</a></font>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="body">
				<div class="column">
					<div class="col-md-12" id="body-top">
						<form action="vote_back.php" method="post">
						<br/><br/>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img src="009.jpg" width="220px" height="220px" class="img-rounded">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img src="003.jpg" width="220px" height="220px" class="img-rounded">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img src="004.jpg" width="220px" height="220px" class="img-rounded">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img src="005.jpg" width="220px" height="220px" class="img-rounded">
						<br/><br/><br/>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="novelist" value="1" >天籁纸鸢（君子以泽）
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="novelist" value="2" >淮上
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="novelist" value="3" >非天夜翔
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="novelist" value="4" >风弄
						<br/><br/><br/><br/><br/>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img src="007.jpg" width="220px" height="220px" class="img-rounded">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img src="008.jpg" width="220px" height="220px" class="img-rounded">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img src="010.jpg" width="220px" height="220px" class="img-rounded">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<img src="011.jpg" width="220px" height="220px" class="img-rounded">
						<br/><br/><br/>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="novelist" value="5" >青罗扇子
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="novelist" value="6" >易人北
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="novelist" value="7" >蓝淋
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="novelist" value="8" >大风刮过
						
						<br/><br/>
							<center>
								<input type="submit" class="btn btn-default" name="submit1" value="投票" style="width:100px;height:40px;"/>
							</center>
						<br/>
							<div style="width:1100px;height:1px;border-top:1px solid black;"/>
						<br/>
						</form>
						
					</div>
				</div>
				<div class="column">
					<div class="col-md-12" id="body-bottom">
							『结果如下』
							<br/><br/><br/>
						<div class="dropdown">

							<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
							<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

							<ul>
								<li>
									天籁纸鸢（君子以泽）&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" class="btn btn-primary" name="submit1" value="<?php echo $vote1; ?>票" style="width:<?php $vote=50+$vote1*10;echo $vote; ?>px;height:40px;"/>
									<button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    投票者
									 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="position:'absolute'; margin-left:250px;margin-top:-452px;">
										<?php
											require_once "MysqlTool.php";
											$MysqliTool0=new MysqliTool();
											$sql="select name from user where novelist=1;";
											$res=$MysqliTool0->execute_dql($sql);
											while($row=$res->fetch_assoc())
											{
												echo "<li>".$row['name']."</li>";
											}
										?>
										
									</ul>
								</li>
								<br/>
								<li>
									淮上&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input type="button" class="btn btn-primary" name="submit1" value="<?php echo $vote2; ?>票" style="width:<?php $vote=50+$vote2*10;echo $vote; ?>px;height:40px;"/>
									<button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    投票者
									 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu " aria-labelledby="dropdownMenu1" style="position:'absolute';margin-left:250px; margin-top:-388px;">
										<?php
											require_once "MysqlTool.php";
											$MysqliTool1=new MysqliTool();
											$sql="select name from user where novelist=2;";
											$res=$MysqliTool1->execute_dql($sql);
											while($row=$res->fetch_assoc())
											{
												echo "<li>".$row['name']."</li>";
											}
										?>
									</ul>
								</li>
								<br/>
								<li>
									非天夜翔&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input type="button" class="btn btn-primary" name="submit1" value="<?php echo $vote3; ?>票" style="width:<?php $vote=50+$vote3*10;echo $vote; ?>px;height:40px;"/>
									<button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    投票者
									 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="position:'absolute'; margin-left:250px; margin-top:-320px;">
										<?php
											require_once "MysqlTool.php";
											$MysqliTool2=new MysqliTool();
											$sql="select name from user where novelist=3;";
											$res=$MysqliTool2->execute_dql($sql);
											while($row=$res->fetch_assoc())
											{
												echo "<li>".$row['name']."</li>";
											}
										?>
									</ul>
								</li>
								<br/>
								<li>
									风弄&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input type="button" class="btn btn-primary" name="submit1" value="<?php echo $vote4; ?>票" style="width:<?php $vote=50+$vote4*10;echo $vote; ?>px;height:40px;"/>
									<button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    投票者
									 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu " aria-labelledby="dropdownMenu1" style="position:'absolute'; margin-left:250px; margin-top:-258px;">
										<?php
											require_once "MysqlTool.php";
											$MysqliTool3=new MysqliTool();
											$sql="select name from user where novelist=4;";
											$res=$MysqliTool3->execute_dql($sql);
											while($row=$res->fetch_assoc())
											{
												echo "<li>".$row['name']."</li>";
											}
										?>
									</ul>
								</li>
								<br/>
								<li>
									青罗扇子&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input type="button" class="btn btn-primary" name="submit1" value="<?php echo $vote5; ?>票" style="width:<?php $vote=50+$vote5*10;echo $vote; ?>px;height:40px;"/>
									<button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    投票者
									 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu " aria-labelledby="dropdownMenu1" style="position:'absolute'; margin-left:250px; margin-top:-192px;">
										<?php
											require_once "MysqlTool.php";
											$MysqliTool4=new MysqliTool();
											$sql="select name from user where novelist=5;";
											$res=$MysqliTool4->execute_dql($sql);
											while($row=$res->fetch_assoc())
											{
												echo "<li>".$row['name']."</li>";
											}
										?>
									</ul>
								</li>
								<br/>
								<li>
									易人北&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input type="button" class="btn btn-primary" name="submit1" value="<?php echo $vote6; ?>票" style="width:<?php $vote=50+$vote6*10;echo $vote; ?>px;height:40px;"/>
									<button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    投票者
									 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="position:'absolute'; margin-left:250px;margin-top:-124px;">
										<?php
											require_once "MysqlTool.php";
											$MysqliTool5=new MysqliTool();
											$sql="select name from user where novelist=6;";
											$res=$MysqliTool5->execute_dql($sql);
											while($row=$res->fetch_assoc())
											{
												echo "<li>".$row['name']."</li>";
											}
										?>
									</ul>
								</li>
								<br/>
								<li>
									蓝淋&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input type="button" class="btn btn-primary" name="submit1" value="<?php echo $vote7; ?>票" style="width:<?php $vote=50+$vote7*10;echo $vote; ?>px;height:40px;"/>
									<button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    投票者
									 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu " aria-labelledby="dropdownMenu1" style="position:'absolute';margin-left:250px; margin-top:-60px;">
										<?php
											require_once "MysqlTool.php";
											$MysqliTool6=new MysqliTool();
											$sql="select name from user where novelist=7;";
											$res=$MysqliTool6->execute_dql($sql);
											while($row=$res->fetch_assoc())
											{
												echo "<li>".$row['name']."</li>";
											}
										?>
									</ul>
								</li>
								<br/>
								<li>
									大风刮过&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									<input type="button" class="btn btn-primary" name="submit1" value="<?php echo $vote8; ?>票" style="width:<?php $vote=50+$vote8*10;echo $vote; ?>px;height:40px;"/>
											 
									<button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    投票者
									 <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="position:'absolute'; margin-left:250px;margin-top:6px;">
										<?php
											require_once "MysqlTool.php";
											$MysqliTool7=new MysqliTool();
											$sql="select name from user where novelist=8;";
											$res=$MysqliTool7->execute_dql($sql);
											while($row=$res->fetch_assoc())
											{
												echo "<li>".$row['name']."</li>";
											}
										?>
									</ul>		  		
											

								</li>
							</ul>
						</div>	
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12" id="bottom">
				<br/><br/>
				<div style="width:1100px;height:1px;border-top:1px solid black;"/>
			</div>
		</div>
	</div>
</body>
</html>

