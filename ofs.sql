use teacher;
DROP TABLE IF EXISTS `apply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apply` (
  `id` INT(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  -- 申请编号
  `apply_num` varchar(255) DEFAULT '0',
  -- 状态
  `stat` tinyint(4) DEFAULT '0',
  `info` varchar(2048) DEFAULT NULL,
  `user` char(64) NOT NULL DEFAULT '',
  -- 用户头像信息
  `file` char(128) DEFAULT NULL,
  `doc` char(128) DEFAULT NULL,
  `docreview` char(128) DEFAULT NULL,
  -- 是否已经上传身份信息
  `has_upload_identify` tinyint(4) DEFAULT '0',
  -- 身份证地址
  `identity_card` varchar(255) DEFAULT NULL,
  -- 学历证书地址
  `acade_cert` varchar(255) DEFAULT NULL,
  -- 体检报告地址
  `medical_report` varchar(255) DEFAULT NULL,
  `moditime` INT DEFAULT NULL,
  `create_time` INT DEFAULT NULL,
  `audit_time` int DEFAULT NULL,
  -- 审核信息
  `audit_remark` varchar(255) DEFAULT NULL
)ENGINE=MyISAM DEFAULT CHARSET=gbk;