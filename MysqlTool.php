<?php

	class MysqliTool{
		private $mysqli;
		private static $host="localhost:3306";
		private static $user="root";
		private static $pwd="123456";
		private static $db="vote";


		public function __construct()
		{
			$this->mysqli=new mysqli(self::$host,self::$user,self::$pwd,self::$db);
			if($this->mysqli->connect_errno)
			{
				die("连接失败".$this->mysqli->connect_errno);
			}
			$this->mysqli->query("set names utf8");
		}


		public function execute_dql($sql)
		{
			
			$res=$this->mysqli->query($sql) or die("操作dql".$this->mysqli->error);
			return $res;
		}



		public function execute_dml($sql)
		{
			$res=$this->mysqli->query($sql) or die("操作dql".$this->mysqli->error);
			if(!$res)
			{
				return 0;//表示失败
			}
			else
			{
				if($this->mysqli->affected_rows>0)
				{
					return 1;//表示成功
				}
				else
				{
					return 2;//表示没有行数影响
				}
			}
		}
	}
?>