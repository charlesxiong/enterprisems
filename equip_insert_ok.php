<?php 
include("conn/conn.php");
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
if($_POST['Submit']==true){
	$query=mysql_query("insert into tb_quipment(q_name,q_brand,q_serialno,q_manunit,q_distr_depart,q_distr_date,q_depart,q_depart_user,q_price,q_detail) values('".$_POST['q_name']."','".$_POST['q_brand']."','".$_POST['q_serialno']."','".$_POST['q_serialno']."','".$_POST['q_manunit']."','".$_POST['q_distr_depart']."','".$_POST['q_distr_date']."','".$_POST['q_depart']."','".$_POST['q_depart_user']."','".$_POST['q_price']."','".$_POST['q_detail']."')",$conn);
	    if($query==true){
			echo "<script> alert('设备信息添加成功');window.location.href='indexs.php?lmbs=设备管理';</script>";
		}
  }

?>