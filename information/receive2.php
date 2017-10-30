<?php
	session_start();
	header("Content-type:text/html;charset=utf-8");
	//连接数据库
	//$con = mysql_connect("localhost","root","");
	$qyid = $_POST['qyid'];
	$location = $_POST['location'];
	$qyname = $_POST['qyname'];
	$qynumber = $_POST['qynumber'];
	$fax = $_POST['fax'];
	$qyemail = $_POST['qyemail'];
	$area1= $_POST['area1'];
	$area2 = $_POST['area2'];
	$rgs_capital = $_POST['rgs_capital'];
	$rgs_time = $_POST['rgs_time'];
	$amount = $_POST['amount'];
	$administrator = $_POST['administrator'];
	$woker = $_POST['woker'];
	$tips = $_POST['tips'];
	
	$con = mysqli_connect("localhost","root","","information");
	if(!$con)
	{
		die('连接失败：'.mysql_error());
	}
	
	//mysql_select_db("information",$con);
	if($qyid == ""||$location = ""||$qyname = ""||$qynumber = ""||$fax = ""||$qyemail = ""||$area1= ""
	||$area2 = ""||$rgs_capital = ""||$rgs_time = ""||$amount = ""||$administrator = ""||$woker = ""||$tips = "")
	{
		echo "请填写完整信息！";
	}else 
	//elseif (!preg_match('/^[\w\.]+@\w+\.\w+$/i', $qyemail)) {
		//echo "邮箱不合法！重新填写";}
	else{
	
		$sql = "INSERT INTO company (qyid,location,qyname,qynumber,fax,qyemail,area1,area2,rgs_capital,rgs_time,amount,administrator,woker,tips)
				VALUES
				('$_POST[qyid]','$_POST[location]','$_POST[qyname]',
				'$_POST[qynumber]','$_POST[fax]','$_POST[qyemail]',
				'$_POST[area1]','$_POST[area2]',
				'$_POST[rgs_capital]','$_POST[rgs_time]',
				'$_POST[amount]','$_POST[administrator]',
				'$_POST[woker]','$_POST[tips]')";
	}
	if(!(mysqli_query($con,$sql))){
		echo "<script>alert('数据插入失败');window.location.href='zhuce.html'</script>";
	}else echo "数据插入成功！";

?>