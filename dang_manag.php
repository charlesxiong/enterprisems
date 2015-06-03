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
<img src="images/dang.jpg" width="685">
<h2><strong><font color="#FF3333"><p>一 危险品列表和添加</p></font></strong></h2>
<form name="form5" method="post" action="dang_insert_ok.php" >
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
    <tr>
    <td  height="26" align="center" bgcolor="#FFFFFF">化学品名：<input name="d_name" type="text" id="d_name" size="12"/></td>
    <td  align="center" bgcolor="#FFFFFF">化学品分类：
    <input name="d_category" type="text" size="12"  /></td>
    <td align="center" bgcolor="#FFFFFF">购买数目：
    <input name="d_number" type="text" size="12"  /></td>
   </tr>
  <tr>
    <td  height="26" align="center" bgcolor="#FFFFFF">供应商：
	<input name="d_supply" type="text" size="12" /></td>
	<td  align="center" bgcolor="#FFFFFF">设备状况：
    <input name="d_checkstate" type="text" size="12"  /></td>
    <td  align="center" bgcolor="#FFFFFF">使用地点：
    <input name="d_place" type="text" size="12" /></td>
  </tr>
  <tr>
   <td colspan="4" align="center" bgcolor="#FFFFFF">是否完好：
    <input name="d_complete" type="text" size="12"  /></td>
  </tr>
   <tr>
     <td colspan="3" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交危险化学品信息" /></td>
  </tr>
</table>
</form>
<br />
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  
  <tr>
    <td  height="26" align="center" bgcolor="#FFFFFF">物品名称</td>
	<td  align="center" bgcolor="#FFFFFF">化学品分类</td>
    <td  align="center" bgcolor="#FFFFFF">购买数目</td>
    <td  align="center" bgcolor="#FFFFFF">供应商</td>
	<td  align="center" bgcolor="#FFFFFF">使用状况</td>
    <td  align="center" bgcolor="#FFFFFF">是否完好</td>
	<td  align="center" bgcolor="#FFFFFF">使用地点</td>
	<td  align="center" bgcolor="#FFFFFF">操作</td>
  </tr>
 <?php 
 include("conn/conn.php");
 $query=mysql_query("select * from tb_chemicals",$conn);
 while($myrows=mysql_fetch_array($query)){
  ?>
  <tr>
    <td height="26" align="center" bgcolor="#FFFFFF"><?php echo $myrows['d_name'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['d_category'];?></td>
     <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['d_number'];?></td>
     <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['d_supply'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['d_checkstate'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['d_complete'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrows['d_place'];?></td>
     <td align="center" bgcolor="#FFFFFF"><a href="delete_dang.php?delete=<?php echo $myrows['id'];?>">删除</a></td>
  </tr>
  <?php }?>
</table>

<hr />
<h2><strong><font color="#FF3333"><p>二 危险品查询</p></font></strong></h2>
<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
  <form name="form1" method="post" action="indexs.php?lmbs=危险化学品管理">
  <tr>
    <td width="185" align="right" bgcolor="#FFFFFF">查询条件：<select name="select1" id="select1">
      <option value="化学品分类">化学品分类</option>
      <option value="使用状况">使用状况</option>
	  <option value="是否完好">是否完好</option>
	  <option value="使用地点">使用地点</option>
    </select></td>
  
    <td width="300" bgcolor="#FFFFFF">检索关键词: <input name="select" type="text" id="select" size="15"></td>
    <td  width="200"  align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit1" value="查询"></td>
  </tr>
  </form>
</table>
<br />

<table  class="ziti" width="685" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#666666">
   <tr>
    <td  height="26" align="center" bgcolor="#FFFFFF">物品名称</td>
	<td  align="center" bgcolor="#FFFFFF">化学品分类</td>
    <td  align="center" bgcolor="#FFFFFF">购买数目</td>
    <td  align="center" bgcolor="#FFFFFF">供应商</td>
	<td  align="center" bgcolor="#FFFFFF">使用状况</td>
    <td  align="center" bgcolor="#FFFFFF">是否完好</td>
	<td  align="center" bgcolor="#FFFFFF">使用地点</td>
  </tr>
   <?php
    $myrow = array(
        "d_id"=>null,
        "d_name"=>null,
        "d_category"=>null,
        "d_number"=>null,
        "d_supply"=>null,
        "d_checkstate"=>null,
        "q_place"=>null,
        "q_complete"=>null,
    );
	
	if(isset($_POST['select1']) && $_POST['select1']=="化学品分类"){
	$query="select * from tb_chemicals where d_category='".$_POST['select']."'";
	$result=mysql_query($query,$conn);
	}
	if(isset($_POST['select1']) && $_POST['select1']=="使用状况"){
	$query="select * from tb_chemicals where d_checkstate='".$_POST['select']."'";
	$result=mysql_query($query,$conn);
	
	}
	if(isset($_POST['select1']) && $_POST['select1']=="是否完好"){
	$query="select * from tb_chemicals where d_complete='".$_POST['select']."'";
	$result=mysql_query($query,$conn);
	
	}
	if(isset($_POST['select1']) && $_POST['select1']=="使用地点"){
	$query="select * from tb_chemicals where d_place='".$_POST['select']."'";
	$result=mysql_query($query,$conn);
	}
	if($result){
	 while($myrow=mysql_fetch_array($result)){
       ?>
   <tr>
  	 <td height="26" align="center" bgcolor="#FFFFFF"><?php echo $myrow['d_name'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrow['d_category'];?></td>
     <td align="center" bgcolor="#FFFFFF"><?php echo $myrow['d_number'];?></td>
     <td align="center" bgcolor="#FFFFFF"><?php echo $myrow['d_supply'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrow['d_checkstate'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrow['d_complete'];?></td>
	 <td align="center" bgcolor="#FFFFFF"><?php echo $myrow['d_place'];?></td>
  </tr>
  <?php }}?> 
</table>

<br />
<br />


</body>
</html>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>