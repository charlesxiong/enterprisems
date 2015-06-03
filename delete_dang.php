<?php session_start(); include("conn/conn.php");
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
if($_SESSION['admin_user']==true){
	if(isset($_GET['delete']) && $_GET['delete']==true){
		$query="delete from tb_chemicals where id='".$_GET['delete']."'";
		$result=mysql_query($query,$conn);
		if($query==true){
  			echo "<script>alert('发货单删除成功!');window.location.href='indexs.php?lmbs=危险化学品管理';</script>"; 
		}	
	}
}else{
	echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>
