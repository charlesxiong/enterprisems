<?php 
include("conn/conn.php");
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
if($_POST['Submit']==true){
	if(preg_match("/^(\d{3}-)(\d{8})$|^(\d{4}-)(\d{7})$|^(\d{4}-)(\d{8})$|^(\d{11})$/",$_POST['u_tel'])){ 
	$query=mysql_query("insert into tb_users(u_name,u_sex,u_birth,u_addr,u_tel,u_email,u_depart) values('".$_POST['u_name']."','".$_POST['u_sex']."','".$_POST['u_birth']."','".$_POST['u_addr']."','".$_POST['u_tel']."','".$_POST['u_email']."','".$_POST['u_depart']."')",$conn);
	    
		if($query==true){
			echo "<script> alert('员工信息添加成功');window.location.href='indexs.php?lmbs=员工管理';</script>";
		}
    } else{
		echo "<script>alert('您输入的电话号码格式不正确!!');history.back()</script>";
	}
}
?>