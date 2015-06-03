<?php
if(!$_SESSION){
    session_start();
}
include("conn/conn.php");
if($_SESSION['admin_user']==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>物流管理系统</title>
</head>

<body>
<p><img src="images/equip.jpg" width="685" height="314"></p>
<p>&nbsp;</p>
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <form name="form1" method="post" action="indexs.php?lmbs=设备管理">
  <tr>
    <td width="185" align="right" bgcolor="#FFFFFF">查询条件：<select name="select1" id="select1">
      <option value="设备编号">设备编号</option>
      <option value="负责人">负责人</option>
	  <option value="在用单位">在用单位</option>
    </select></td>
  
    <td width="300" bgcolor="#FFFFFF">检索关键词: <input name="select" type="text" id="select" size="15"></td>
    <td  width="200"  align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="查询"></td>
  </tr>
  </form>
</table>
	<?php
    $myrow = array(
        "q_id"=>null,
        "q_name"=>null,
        "q_brand"=>null,
        "q_serialno"=>null,
        "q_manunit"=>null,
        "q_distr_depart"=>null,
        "q_distr_date"=>null,
        "q_depart"=>null,
        "q_depart_user"=>null,
        "q_price"=>null,
        "q_detail"=>null,
    );
	if(isset($_POST['select1']) && $_POST['select1']=="设备编号"){
	$query="select * from tb_quipment where q_serialno='".$_POST['select']."'";
	$result=mysql_query($query,$conn);
	$myrow=mysql_fetch_array($result);
	}
	if(isset($_POST['select1']) && $_POST['select1']=="负责人"){
	$query="select * from tb_quipment where q_depart_user='".$_POST['select']."' order by q_id desc ";
	$result=mysql_query($query,$conn);
	$myrow=mysql_fetch_array($result);
	}
	if(isset($_POST['select1']) && $_POST['select1']=="在用单位"){
	$query="select * from tb_quipment where q_depart='".$_POST['select']."' order by q_id desc ";
	$result=mysql_query($query,$conn);
	$myrow=mysql_fetch_array($result);
	}
	?>
<br />

<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
   <tr>
    <td   align="center" bgcolor="#FFFFFF">设备名称</td>
    <td  width="75" algin="center" bgcolor="#FFFFFF">设备类型</td>
	<td  width="75" align="center" bgcolor="#FFFFFF">设备编号</td>
	<td  width="75" align="center" bgcolor="#FFFFFF">制造单位</td>
	<td  width="75" align="center" bgcolor="#FFFFFF">配发单位</td>
	<td  width="85" align="center" bgcolor="#FFFFFF">配发时间</td>
	<td  width="75" align="center" bgcolor="#FFFFFF">在用单位</td>
	<td  width="75" align="center" bgcolor="#FFFFFF">负责人</td>
	<td  width="75" align="center" bgcolor="#FFFFFF">单价</td>
  </tr>
  <tr>
   <td  width="75" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_name'];?></td>
   <td  width="75" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_brand'];?></td>
   <td  width="75" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_serialno'];?></td>
   <td  width="75" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_manunit'];?></td>
   <td  width="75" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_distr_depart'];?></td>
   <td  width="85" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_distr_date'];?></td>
   <td  width="75" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_depart'];?></td>
   <td  width="75" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_depart_user'];?></td>
   <td  width="75" align="center" bgcolor="#FFFFFF"><?php echo $myrow['q_price'];?></td>
  </tr>
  <tr>
    <td colspan="9" align="center" bgcolor="#FFFFFF"><a href="delete_equip.php?delete=<?php echo $myrow['q_id'];?>">删除设备信息</a></td>
  </tr>
</table>

<p>&nbsp;</p>
<hr />
<form name="form5" method="post" action="equip_insert_ok.php" >
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
    <tr>
    <td width="90" height="26" align="center" bgcolor="#FFFFFF">设备编号：</td>
    <td width="145" bgcolor="#FFFFFF"><input name="q_serialno" type="text" id="q_serialno"  value="<?php echo date("YmdHis");?><?php echo $_GET['q_serialno'];?>" size="20"/> </td>
    <td width="196" align="center" bgcolor="#FFFFFF">设备名称：
    <input name="q_name" type="text" size="12"  /></td>
    <td width="213" align="center" bgcolor="#FFFFFF">设备类型：
    <input name="q_brand" type="text" size="12"  /></td>
  </tr>
  <tr>
    <td width="90" height="26" align="center" bgcolor="#FFFFFF">制造单位：</td>
    <td width="145" bgcolor="#FFFFFF"><input name="q_manunit" type="text" size="12" /></td>
	<td width="196" align="center" bgcolor="#FFFFFF">配发单位：
    <input name="q_distr_depart" type="text" size="12"  /></td>
    <td width="213" align="center" bgcolor="#FFFFFF">配发时间：
    <input name="q_q_distr_date" type="text" size="12" /></td>
  </tr>
  <tr>
    <td width="90" height="26" align="center" bgcolor="#FFFFFF">在用单位：</td>
    <td width="145" bgcolor="#FFFFFF"><input name="q_depart" type="text" size="12" /></td>
	<td width="196" align="center" bgcolor="#FFFFFF">负责人：
    <input name="q_depart_user" type="text" size="12"  /></td>
    <td width="213" align="center" bgcolor="#FFFFFF">单价：
    <input name="q_price" type="text" size="12" /></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF">设备描述：</td>
    <td colspan="3" bgcolor="#FFFFFF"><textarea name="q_detail" cols="65" rows="5"></textarea></td>
  </tr>
   <tr>
    <td colspan="4" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交设备信息" /></td>
  </tr>
</table>
</form>
</body>
</html>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>