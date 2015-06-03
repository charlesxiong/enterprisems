<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script language="javascript">
  function chkinput(form){
  
    if(form.admin_user.value==""){
	  alert("请输入用户昵称!");
	  form.admin_user.select();
	  return(false);
	}
   if(form.admin_pass.value==""){
	  alert("请输入注册密码!");
	  form.admin_pass.select();
	  return(false);
	}
   return(true);
  }

</script>
<body>
<table width="800" height="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">
	<table width="635" height="372" border="0" align="center" cellpadding="0" cellspacing="0" background="images/logo.jpg">
    <form name="form1" method="post" action="index.php"  onsubmit="return chkinput(this)">
		<tr>
		  <td height="60">用户名:</td>
		  <td align="center"><input type="text" name="admin_user" class="inputcss" size="14"></td>
		  <td></td>
		  <td width="225" align="center">密码: 
		    <input type="password" name="admin_pass" class="inputcss" size="14"></td>
		  <td width="91"><input type="image" name="imageField" src="images/dl_03.gif"></td>
		  <td width="110"><input type="image" name="reset" src="images/dl_04.gif" onClick="form.reset();return false;" class="inputcss" ></td>
		</tr>
		<tr>
		  <td width="53" height="240"></td>
		  <td width="94"></td>
		  <td width="62"></td>
		  <td colspan="3"></td>
		</tr>
		
		<tr>
		  <td height="34"></td>
		  <td></td>
		  <td></td>
		  <td colspan="3"></td>
		</tr>
  	</form>
	</table>
	</td>
  </tr>
</table>
<?php
 if(isset($_POST['admin_user']) || isset($_POST['admin_pass'])){
 	$conn=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	mysql_select_db("app_safemanagent",$conn);
    $admin_user=$_POST['admin_user'];
    $admin_pass=$_POST['admin_pass'];
	$select =mysql_query("select * from tb_admin where admin_user='".$_POST['admin_user']."' and admin_pass='".$_POST['admin_pass']."'",$conn);
	if(($res=mysql_fetch_array($select))!=NULL){
		$_SESSION['admin_user']=$_POST['admin_user'];
		$_SESSION['admin_pass']=$_POST['admin_pass'];
		echo "<script>alert('管理员登录成功!');window.location.href='indexs.php';</script>";
	} else{
		 echo "<script>alert('管理员登录失败!');</script>";
	}
 
 }
?>
</body>
</html>
