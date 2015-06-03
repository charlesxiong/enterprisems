-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机: w.rdc.sae.sina.com.cn:3307
-- 生成日期: 2015 年 05 月 20 日 19:11
-- 服务器版本: 5.5.23
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_safemanagent`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `admin_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `admin_user`, `admin_pass`) VALUES
(0000000001, 'sr', 'srsoft');

-- --------------------------------------------------------

--
-- 表的结构 `tb_chemicals`
--

CREATE TABLE IF NOT EXISTS `tb_chemicals` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `d_complete` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `d_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `d_category` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `d_number` int(10) NOT NULL,
  `d_supply` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `d_checkstate` varchar(50) NOT NULL,
  `d_place` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tb_chemicals`
--

INSERT INTO `tb_chemicals` (`id`, `d_complete`, `d_name`, `d_category`, `d_number`, `d_supply`, `d_checkstate`, `d_place`) VALUES
(0000000001, '是', '烧碱', '第六类', 5, '宁波美福灵医药有限公司', '在用', '注塑车间'),
(0000000002, '否', '磷酸', '第三类', 2, '益利精细化学品公司', '在用', '生产车间1'),
(0000000003, '是', '六氟化硫', '第四类', 3, '广州白云山制药股份有限公司', '封存', '生产车间2'),
(0000000004, '否', '煤油', '第三类', 10, '莞市鸿运石油化工有限公司', '在用', '生产车间2');

-- --------------------------------------------------------

--
-- 表的结构 `tb_company`
--

CREATE TABLE IF NOT EXISTS `tb_company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tb_company`
--

INSERT INTO `tb_company` (`id`, `c_name`, `c_content`) VALUES
(1, '安鼎国际', '安鼎国际有限公司是经国家相关主管机构批准成立的具有安全标准化的实施、安全托管、劳务派遣等专业安全管理服务。\r\n　　它主要从事企业安全现场风险控制、应急事故处理、事故后处理等一系列安全方面的贴心服务。为各类企业提供最专业的安全管理方案，风险管控流程。应急处理预案，以及实施方案的团队，并提供安全培训、安全检查、相关安全认证，工伤理赔代理等工作。\r\n 专业的专家顾问团是公司的重要组成部分，安鼎公司在船舶修造及海洋工程安全管理方面拥有强大的专家顾问团队，团队中拥有各类专家总计超过百名。其中来自国家安全生产监督总局的专家4名，中国工程院院士2名，省级专家12名，院校专家8名（副教授），注册安全评价师38名，注册安全工程师45名。');

-- --------------------------------------------------------

--
-- 表的结构 `tb_quipment`
--

CREATE TABLE IF NOT EXISTS `tb_quipment` (
  `q_id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `q_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `q_brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `q_serialno` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `q_manunit` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `q_distr_depart` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `q_distr_date` datetime NOT NULL,
  `q_depart` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `q_depart_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `q_price` double NOT NULL,
  `q_detail` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tb_quipment`
--

INSERT INTO `tb_quipment` (`q_id`, `q_name`, `q_brand`, `q_serialno`, `q_manunit`, `q_distr_depart`, `q_distr_date`, `q_depart`, `q_depart_user`, `q_price`, `q_detail`) VALUES
(00001, '佳能iP2780', '办公设备', '2015041809342415', '佳能公司', '采购部', '2015-05-19 17:59:51', '销售部', '夏雨', 360, '    佳能iP2780双墨盒配置，单黑墨盒可打印，平滑机身外观设计，操作简单，经济高效。\r\n    外观方面，佳能iP2780彩色喷墨打印机的外形尺寸是445×250×130mm ，重量是3.4kg。\r\n    耗材方面，佳能iP2780彩色喷墨打印机耗材有黑色PG-815，彩色CL-816； 黑色PG-815XL，彩色CL-816XL。墨盒类型是彩色墨盒(染料青色/品红/黄色),黑色墨盒(颜料黑色)\r\n    接口方面，佳能iP2780彩色喷墨打印机提供了高速 USB(B 端口) ，方便用户的连接\r\n    \r\n   '),
(00002, '卧式单级水泵', '生产设备', '2014091223456789', '周渝设备厂', '采购部', '2014-10-14 18:06:54', '生产部', '李勇', 30000, 'ISW、ISWH型卧式单级单吸管道离心泵适用于工业和城市给排水、高层建筑增压送水、园林喷灌、消防增压、远距离输送、暖通制冷循环、浴室等冷暖水循环增压及设备配套');

-- --------------------------------------------------------

--
-- 表的结构 `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_sex` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_birth` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_addr` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_depart` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tb_users`
--

INSERT INTO `tb_users` (`id`, `u_name`, `u_sex`, `u_birth`, `u_addr`, `u_tel`, `u_email`, `u_depart`) VALUES
(0000000001, '李二', '男', '1986-10', '吉林省长春市', '15544443333', '4567885@qq.com', '财务部'),
(0000000002, '张三', '女', '1988-06', '北京市海淀区', '13467890123', '8323456@qq.com', '行政部'),
(0000000003, '夏雨', '女', '1987-09', '安徽省合肥市', '15600892345', '62488512@qq.com', '销售部'),
(0000000004, '刘星', '男', '1978-01', '河北唐山市', '15898761234', '244556675@qq.com', '采购部'),
(0000000005, '李勇', '男', '1990-06', '西安市长安区', '15900901234', '72346686@qq.com', '生产部'),
(0000000006, '赵海', '男', '1993-05', '湖南长沙市', '15645671234', '77236526@qq.com', '技术部');
