<?php 
include("conn/conn.php");
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
if($_POST['Submit']==true){
	$query=mysql_query("insert into tb_chemicals(d_name,d_category,d_number,d_supply,d_checkstate,d_place,d_complete) values('".$_POST['d_name']."','".$_POST['d_category']."','".$_POST['d_number']."','".$_POST['d_supply']."','".$_POST['d_checkstate']."','".$_POST['d_place']."','".$_POST['d_complete']."')",$conn);
	    
	if($query==true){
			echo "<script> alert('危险品信息添加成功');window.location.href='indexs.php?lmbs=危险化学品管理';</script>";
		}
    
}
?>
