<?php session_start(); include("conn/conn.php");
if($_SESSION['admin_user']==true){
	if(isset($_GET['lmbs'])){
			$lmbs=$_GET['lmbs'];
		}else{
			$lmbs="";
		}
	if(isset($_GET['ljid'])){
			$ljid=$_GET['ljid'];
		}else{
			$ljid="";
		}
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业安全事故管理系统</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body><center>
<table border="0" cellpadding="0" cellspacing="0">
  <tr><td><img src="images/index_01_02.gif" width="935" height="24" border="0" usemap="#Map"></td>
</tr></table>
<table width="935" height="428" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="224" height="428" align="center" valign="top" bgcolor="#F5F5F5"><table width="224" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" colspan="2" align="center"><img src="images/index_05_01.gif" width="222" height="28"></td>
        </tr>
      <tr>
        <td width="31" height="26" align="center">&nbsp;</td>
        <td width="193" align="center">&nbsp;</td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=企业信息">企业信息</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=员工管理">员工管理</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=安全机构">安全机构</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=医院情况">医院情况</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=设备安全管理">设备安全管理</a></td>
      </tr>
	   <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=危险物品管理">危险物品管理</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=安全教育培训">安全教育培训</a></td>
      </tr>
      
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=安全统计分析">安全统计分析</a></td>
      </tr>
      <tr>
        <td height="28" align="center">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="28" align="center">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
    </table></td>
    <td width="5"></td>
    <td width="706" height="428" align="right" valign="top" bgcolor="#FFFFFF"><table width="700" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="25" bgcolor="#E5E5E5">&nbsp;</td>
        </tr>
      <tr>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF"><?php
        if(isset($_GET['lmbs']) && $_GET['lmbs'] != ''){

            switch($_GET['lmbs']){
                case "企业信息":
                    include("comp_info.php");
                    break;
                case "员工管理":
                    include("empo_manag.php");
                    break;
                case "医院情况":
                    include("hospi_info.php");
                    break;
                case "设备安全管理":
                    include("equip_manag.php");
                    break;
                case "危险物品管理":
                    include("dang_manag.php");
                    break;
                case "安全教育培训":
                    include("training.php");
                    break;
                case "安全统计分析":
                    include("sum_analy.php");
                    break;
                default:
                    include("comp_info.php");
            }
        }else{
            include("comp_info.php");
        }
	?></td>
      </tr>
    </table></td>
  </tr>
</table>

</center>

<map name="Map">
<area shape="rect" coords="860,5,923,18" href="tc_dl.php">
<area shape="rect" coords="768,6,832,22" href="#"></map></body>
</html>
<?php 
}else{
echo "<script>alert('请您正确登录！'); window.location.href='index.php';</script>";
}

?>