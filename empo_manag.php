<?php
if(!$_SESSION){
    session_start();
}
if($_SESSION['admin_user']==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业安全管理系统</title>
</head>
<script language="javascript" src="js/employ_js.js"></script>
<body>
<img src="images/empo.jpg" width="685" height="345">
<form name="form1" method="post" action="empo_insert_ok.php" >  
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <tr>
    <td colspan="4" align="center" bgcolor="#FFFFFF"><font color="#FF0000" size="5"><strong>员工信息管理</strong></font></td>
  </tr>
  <tr>
    <td width="80" height="26" align="center" bgcolor="#FFFFFF">姓名：</td>
    <td width="218" bgcolor="#FFFFFF"><input name="u_name" type="text" id="u_name" size="25"  /></td>
    <td width="83" height="22" align="center" bgcolor="#FFFFFF">性别：</td>
    <td width="281" bgcolor="#FFFFFF"><input name="u_sex" type="text" id="u_sex" size="25"  /></td>
  </tr>
  <tr>
    <td height="22" align="center" bgcolor="#FFFFFF">出生年月：</td>
    <td bgcolor="#FFFFFF"><input name="u_birth" type="text" id="u_birth" size="28" /></td>
    <td rowspan="2" align="center" bgcolor="#FFFFFF">地址：</td>
    <td rowspan="2" bgcolor="#FFFFFF"><textarea name="u_addr" id="u_addr" cols="30" rows="5" ></textarea></td>
  </tr>
  <tr>
    <td height="22" align="center" bgcolor="#FFFFFF">所在部门：</td>
    <td bgcolor="#FFFFFF"><input name="u_depart" type="text" id="u_depart" /></td>
  </tr>
 <tr>
    <td width="80" height="26" align="center" bgcolor="#FFFFFF">联系方式：</td>
    <td width="218" bgcolor="#FFFFFF"><input name="u_tel" type="text" id="u_tel" size="25"  /></td>
    <td width="83" height="22" align="center" bgcolor="#FFFFFF">电子邮箱：</td>
    <td width="281" bgcolor="#FFFFFF"><input name="u_email" type="text" id="u_email" size="25"  /></td>
  </tr>
  <tr>
    <td colspan="4" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交" /></td>
  </tr>
</table>
</form>
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  
  <tr>
    <td width="100" height="26" align="center" bgcolor="#FFFFFF">员工姓名</td>
	 <td width="50" align="center" bgcolor="#FFFFFF">性别</td>
    <td width="50" align="center" bgcolor="#FFFFFF">电话</td>
    <td width="257" align="center" bgcolor="#FFFFFF">联系地址</td>
	<td width="77" align="center" bgcolor="#FFFFFF">所在部门</td>
    <td width="100" align="center" bgcolor="#FFFFFF">操作</td>
  </tr>
 <?php 
 include("conn/conn.php");
 $query=mysql_query("select * from tb_users",$conn);
 while($myrows=mysql_fetch_array($query)){
  ?>
  <tr>
    <td height="26" align="center" bgcolor="#FFFFFF"><?php echo $myrows['u_name'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['u_sex'];?></td>
     <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['u_tel'];?></td>
     <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['u_addr'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['u_depart'];?></td>
     <td align="center" bgcolor="#FFFFFF"><a href="delete_empo.php?delete=<?php echo $myrows['id'];?>">删除</a></td>
  </tr>
  <?php }?>
</table>
</body>
</html>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>