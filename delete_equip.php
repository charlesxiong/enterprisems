<?php session_start(); include("conn/conn.php");
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
if($_SESSION['admin_user']==true){
	if(isset($_GET['delete']) && $_GET['delete']==true){
		$query="delete from tb_equipment where q_id='".$_GET['delete']."'";
		$result=mysql_query($query,$conn);
		f($query==true){
  			echo "<script>alert('�豸��Ϣɾ���ɹ�!');window.location.href='indexs.php?lmbs=�豸����';</script>";
		} 	
	}
}else{
	echo "<script>alert('������ȷ��¼��'); window.location.href='index.php';</script>";
}

?>
