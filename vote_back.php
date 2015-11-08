<?php
/*
	create table votes(
	id int not null primary key auto_increment,
	nameid int not null,
	vote int not null
	)default charset=utf8;

insert into votes(nameid,vote) values(1,0);
insert into votes(nameid,vote) values(2,0);
insert into votes(nameid,vote) values(3,0);
insert into votes(nameid,vote) values(4,0);
insert into votes(nameid,vote) values(5,0);
insert into votes(nameid,vote) values(6,0);
insert into votes(nameid,vote) values(7,0);
insert into votes(nameid,vote) values(8,0);


alter table user add novelist int;
alter table votes drop column novelist;
*/


	header("content-type:text/html;charset=utf-8");
	require_once "MysqlTool.php";
	if(!isset($_POST['novelist']))
	{
		
		echo"<script language=\"javascript\">";
		echo"alert(\"对不起，您还没有选择投票对象！\");" ;
		echo"location.href=\"vote.php\"";
		echo"</script>";
	}
	else
	{
		$novelist=$_POST['novelist'];
		$MysqliTooll=new MysqliTool();
		$user=$_SESSION['name'];
		$sql="select novelist from user where name='$user';";
		$res=$MysqliTooll->execute_dql($sql);
		while($row=$res->fetch_assoc())
		{
			if($row['novelist']!=NULL)
			{
				echo"<script language=\"javascript\">";
		    	echo"alert(\"对不起，您之前已经投过票了！\");" ;
		    	echo"location.href=\"vote.php\"";
		   		echo"</script>";
		   	 	die();
			}
		}


		$novelist=$_POST['novelist'];
		$sqll="update user set novelist=$novelist where name='$user';";
		$ress=$MysqliTooll->execute_dml($sqll);


		$sqlll="select vote from votes where nameid=$novelist";
		$resss=$MysqliTooll->execute_dql($sqlll);
		while ($row=$resss->fetch_assoc()) {
			$votes=$row['vote']+1;
		}
		$sqllll="update votes set vote=$votes where nameid=$novelist";
		$ressss=$MysqliTooll->execute_dml($sqllll);



		if($ress==1&&$ressss==1)
		{
			echo"<script language=\"javascript\">";
		    echo"alert(\"投票成功！\");" ;
		    echo"location.href=\"vote.php\"";
		   	echo"</script>";
		}



	}
?>