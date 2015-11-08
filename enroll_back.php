<?php
	
	header("content-type:text/html;charset=utf-8");
	require_once "MysqlTool.php";
	if($_POST['username']==""||$_POST['userpassword']==""||$_POST['password']==""||$_POST['useremail']=="")
	{
		echo"<script language=\"javascript\">";
       	echo"alert(\"对不起，用户名或密码或重复输入密码或邮箱不能为空！\");" ;
        echo"location.href=\"enroll.php\"";
       	echo"</script>";
	}
	else
	{
		$username=$_POST['username'];
		$userpad=$_POST['userpassword'];
		$password=$_POST['password'];
		$sex=$_POST['sex'];
		$useremail=$_POST['useremail'];
		$userpassword=md5($userpad);
		if($userpad!=$password)
		{
			echo"<script language=\"javascript\">";
	       	echo"alert(\"对不起，两次输入密码不一致！\");" ;
	        echo"location.href=\"enroll.php\"";
	       	echo"</script>";
		}
		else
		{
			$MysqliTool=new MysqliTool();
			$sql1="select * from user where name='$username';";
			$res1=$MysqliTool->execute_dql($sql1);
			if($row1=$res1->fetch_row())
			{
				echo"<script language=\"javascript\">";
		       	echo"alert(\"对不起，此用户名已被注册！\");" ;
		        echo"location.href=\"enroll.php\"";
		       	echo"</script>";
			}
			else
			{


				$sql="insert into user(name,password,sex,email) values('$username',md5('$password'),'$sex','$useremail');";
				$res=$MysqliTool->execute_dml($sql);
				if($res!=1)
					echo "不成功！！";
				else
				{
					echo"<script language=\"javascript\">";
		       		echo"alert(\"注册成功，点击登录\");" ;
		        	echo"location.href=\"land.php\"";
		       		echo"</script>";
				}
			}

		}
	}
?>