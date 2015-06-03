<?php
if(!$_SESSION){
    session_start();
}
include("conn/conn.php");
if($_SESSION['admin_user']==true){

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业安全管理系统</title>
</head>

<body>
<img src="images/l2.jpg" width="768" height="500" />
<?php
$query=mysql_query("select * from tb_company where id =1",$conn);
$res=mysql_fetch_array($query);
?>
<table width="768" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
	  <td height="25" align="center" valign="top"><textarea name="textarea" cols="90" rows="20" readonly="readonly"><?php echo $res['c_content']?></textarea></td>
	</tr>
</table>
</body>
</html>
<?php 
}else{
echo "<script>alert('登录失败'); window.location.href='index.php';</script>";
}

?>