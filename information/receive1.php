<?php
	//连接数据库
	//$con = mysql_connect("localhost","root","");
	$con = mysqli_connect("localhost","root","","information");
	if(!$con)
	{
		die('连接失败：'.mysql_error());
	}
	
	//mysql_select_db("information",$con);
	$sql = "INSERT INTO person (name,sex,bri,nation,political_status,marriage,job_time,number,job,salary,email,telphone,origin,adress,story)
			VALUES
			('$_POST[name]','$_POST[sex]','$_POST[bri]',
			'$_POST[nation]','$_POST[political_status]','$_POST[marriage]',
			'$_POST[job_time]','$_POST[number]',
			'$_POST[job]','$_POST[salary]',
			'$_POST[email]','$_POST[telphone]',
			'$_POST[origin]','$_POST[adress]'
			,'$_POST[story]')";
	
	
?>