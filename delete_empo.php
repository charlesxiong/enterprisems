<?php 
include("conn/conn.php");		//连接数据库
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	if($_GET['delete']==true){		//判断提交的变量值是否为真			
		$query=mysql_query("delete from tb_users  where id='".$_GET['delete']."'",$conn);
		if($query){
			echo "<script> alert('员工信息删除成功');window.location.href='indexs.php?lmbs=员工管理';</script>";
		}
	}
?>
