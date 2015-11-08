<!--

create table user(
id int not null primary key auto_increment,
name varchar(32) not null,
password varchar(64) not null,
sex varchar(10) not null default 'male',
email varchar(128) not null
)default charset=utf8;


insert into user(name,password,sex,email)  values('Hennessy',md5('hennessy'),'female','834819108@qq.com');
insert into user(name,password,email)  values('赵益石',md5('123456'),'834819108@qq.com');
-->


<?php

	session_start(); 

	header("content-type:text/html;charset=utf-8");
	require_once "MysqlTool.php";
		
	
	if($_POST['username']==""||$_POST['userpassword']=="")
	{
		echo"<script language=\"javascript\">";
       	echo"alert(\"对不起，用户名或密码不能为空！\");" ;
        echo"location.href=\"land.php\"";
       	echo"</script>";
	}
	else
	{
		$username=$_POST['username'];
		$userpad=$_POST['userpassword'];
		$userpassword=md5($userpad);

		$MysqliTool9=new MysqliTool();
		$sql="select password from user where name='$username' limit 0,1";
		$res=$MysqliTool9->execute_dql($sql);

		if($row=$res->fetch_assoc())
		{
			$password=$row['password'];
			if($userpassword==$password)
			{
				$_SESSION['name']=$username;
				echo"<script language=\"javascript\">";
        		echo"location.href=\"vote.php\"";
       			echo"</script>";
			}
			else
			{
				echo"<script language=\"javascript\">";
		       	echo"alert(\"对不起，用户名或密码错误！\");" ;
		        echo"location.href=\"land.php\"";
		       	echo"</script>";
			}
		}

	}


?>