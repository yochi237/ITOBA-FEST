/*
SQLyog - Free MySQL GUI v5.0
Host - 5.5.46 : Database - db_planning
*********************************************************************
Server version : 5.5.46
*/


create database if not exists `db_planning`;

USE `db_planning`;

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_assignment` */

insert into `auth_assignment` values 
('Administrator','1',1497771813),
('Administrator','3',1497772800),
('data_induk_desa','1',1497773307);

/*Table structure for table `auth_item` */

DROP TABLE IF EXISTS `auth_item`;

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item` */

insert into `auth_item` values 
('/admin/*',2,NULL,NULL,NULL,1497772979,1497772979),
('/berkas-kegiatan',2,NULL,NULL,NULL,1497796886,1497796886),
('/berkas-usulan',2,NULL,NULL,NULL,1497799695,1497799695),
('/daftar-anggota-dprd',2,NULL,NULL,NULL,1497798934,1497798934),
('/detail-usulan',2,NULL,NULL,NULL,1497799605,1497799605),
('/jenis-musrenbang',2,NULL,NULL,NULL,1497795557,1497795557),
('/kegiatan',2,NULL,NULL,NULL,1497798733,1497798733),
('/kelompok-usulan-organisasi',2,NULL,NULL,NULL,1497799241,1497799241),
('/master-berkas',2,NULL,NULL,NULL,1497795987,1497795987),
('/master-berkas-kegiatan',2,NULL,NULL,NULL,1497796246,1497796246),
('/master-border-desa',2,NULL,NULL,NULL,1497797370,1497797370),
('/master-daerah-pemilihan',2,NULL,NULL,NULL,1497796469,1497796469),
('/master-dapil-kec',2,NULL,NULL,NULL,1497797051,1497797051),
('/master-desa',2,NULL,NULL,NULL,1497775244,1497775244),
('/master-fraksi',2,NULL,NULL,NULL,1497797046,1497797046),
('/master-institusi',2,NULL,NULL,NULL,1497795557,1497795557),
('/master-jenis-organisasi',2,NULL,NULL,NULL,1497795052,1497795052),
('/master-jenis-usulan',2,NULL,NULL,NULL,1497795764,1497795764),
('/master-kamus-usulan',2,NULL,NULL,NULL,1497799087,1497799087),
('/master-kecamatan',2,NULL,NULL,NULL,1497795051,1497795051),
('/master-kelompok-usulan',2,NULL,NULL,NULL,1497798587,1497798587),
('/master-kepala-desa',2,NULL,NULL,NULL,1497799391,1497799391),
('/master-kepegawaian',2,NULL,NULL,NULL,1497796881,1497796881),
('/master-organisasi',2,NULL,NULL,NULL,1497796456,1497796456),
('/master-partai',2,NULL,NULL,NULL,1497797370,1497797370),
('/master-pimpinan-organisasi',2,NULL,NULL,NULL,1497798557,1497798557),
('/master-prioritas-pembangunan',2,NULL,NULL,NULL,1497796023,1497796023),
('/master-status-usulan',2,NULL,NULL,NULL,1497795760,1497795760),
('/master-tahun-pemilihan',2,NULL,NULL,NULL,1497796248,1497796248),
('/pendamping-kegiatan',2,NULL,NULL,NULL,1497798974,1497798974),
('/usulan',2,NULL,NULL,NULL,1497799497,1497799497),
('Administrator',1,NULL,NULL,NULL,1497771735,1497771735),
('berkas_kegiatan',2,NULL,NULL,NULL,1497796915,1497796915),
('berkas_usulan',2,NULL,NULL,NULL,1497799706,1497799706),
('daftar_anggota_dprd',2,NULL,NULL,NULL,1497798962,1497798962),
('data_induk_desa',2,NULL,NULL,NULL,1497773256,1497773256),
('data_induk_institusi',2,NULL,NULL,NULL,1497795584,1497795584),
('data_induk_jenis_organisasi',2,NULL,NULL,NULL,1497795119,1497795119),
('data_induk_kecamatan',2,NULL,NULL,NULL,1497795102,1497795102),
('detail_usulan',2,NULL,NULL,NULL,1497799618,1497799618),
('kegiatan',2,NULL,NULL,NULL,1497798749,1497798749),
('kelompok_usulan_organisasi',2,NULL,NULL,NULL,1497799257,1497799257),
('master_berkas',2,NULL,NULL,NULL,1497796043,1497796043),
('master_berkas_kegiatan',2,NULL,NULL,NULL,1497796269,1497796269),
('master_boder_desa',2,NULL,NULL,NULL,1497797391,1497797391),
('master_daerah_pemilihan',2,NULL,NULL,NULL,1497796485,1497796485),
('master_dapil_kecamatan',2,NULL,NULL,NULL,1497797069,1497797271),
('master_fraksi',2,NULL,NULL,NULL,1497797058,1497797058),
('master_jenis_musrenbang',2,NULL,NULL,NULL,1497795586,1497795586),
('master_jenis_usulan',2,NULL,NULL,NULL,1497795797,1497795797),
('master_kamus_usulan',2,NULL,NULL,NULL,1497799105,1497799105),
('master_kelompok_usulan',2,NULL,NULL,NULL,1497798618,1497798618),
('master_kepala_desa',2,NULL,NULL,NULL,1497799403,1497799403),
('master_kepegawaian',2,NULL,NULL,NULL,1497796905,1497796905),
('master_organisasi',2,NULL,NULL,NULL,1497796485,1497796485),
('master_partai',2,NULL,NULL,NULL,1497797382,1497797382),
('master_pimpinan_organisasi',2,NULL,NULL,NULL,1497798568,1497798568),
('master_prioritas_pembangunan',2,NULL,NULL,NULL,1497796053,1497796053),
('master_status_usulan',2,NULL,NULL,NULL,1497795798,1497795798),
('master_tahun_pemilihan',2,NULL,NULL,NULL,1497796267,1497796267),
('pendamping_kegiatan',2,NULL,NULL,NULL,1497798988,1497798988),
('usulan',2,NULL,NULL,NULL,1497799510,1497799510);

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item_child` */

insert into `auth_item_child` values 
('data_induk_desa','/admin/*'),
('berkas_usulan','/berkas-usulan'),
('daftar_anggota_dprd','/daftar-anggota-dprd'),
('detail_usulan','/detail-usulan'),
('master_jenis_musrenbang','/jenis-musrenbang'),
('kegiatan','/kegiatan'),
('kelompok_usulan_organisasi','/kelompok-usulan-organisasi'),
('master_berkas','/master-berkas'),
('master_berkas_kegiatan','/master-berkas-kegiatan'),
('master_boder_desa','/master-border-desa'),
('master_daerah_pemilihan','/master-daerah-pemilihan'),
('master_dapil_kecamatan','/master-dapil-kec'),
('data_induk_desa','/master-desa'),
('master_fraksi','/master-fraksi'),
('data_induk_institusi','/master-institusi'),
('data_induk_jenis_organisasi','/master-jenis-organisasi'),
('master_jenis_usulan','/master-jenis-usulan'),
('master_kamus_usulan','/master-kamus-usulan'),
('data_induk_kecamatan','/master-kecamatan'),
('master_kelompok_usulan','/master-kelompok-usulan'),
('master_kepala_desa','/master-kepala-desa'),
('master_kepegawaian','/master-kepegawaian'),
('master_organisasi','/master-organisasi'),
('master_partai','/master-partai'),
('master_pimpinan_organisasi','/master-pimpinan-organisasi'),
('master_prioritas_pembangunan','/master-prioritas-pembangunan'),
('master_status_usulan','/master-status-usulan'),
('master_tahun_pemilihan','/master-tahun-pemilihan'),
('pendamping_kegiatan','/pendamping-kegiatan'),
('usulan','/usulan'),
('Administrator','berkas_kegiatan'),
('Administrator','berkas_usulan'),
('Administrator','daftar_anggota_dprd'),
('Administrator','data_induk_desa'),
('Administrator','data_induk_institusi'),
('Administrator','data_induk_jenis_organisasi'),
('Administrator','data_induk_kecamatan'),
('Administrator','detail_usulan'),
('Administrator','kegiatan'),
('Administrator','kelompok_usulan_organisasi'),
('Administrator','master_berkas'),
('Administrator','master_berkas_kegiatan'),
('berkas_kegiatan','master_berkas_kegiatan'),
('Administrator','master_boder_desa'),
('Administrator','master_daerah_pemilihan'),
('Administrator','master_dapil_kecamatan'),
('Administrator','master_fraksi'),
('Administrator','master_jenis_musrenbang'),
('Administrator','master_jenis_usulan'),
('Administrator','master_kamus_usulan'),
('Administrator','master_kelompok_usulan'),
('Administrator','master_kepala_desa'),
('Administrator','master_kepegawaian'),
('Administrator','master_organisasi'),
('Administrator','master_partai'),
('Administrator','master_pimpinan_organisasi'),
('Administrator','master_prioritas_pembangunan'),
('Administrator','master_status_usulan'),
('Administrator','master_tahun_pemilihan'),
('Administrator','pendamping_kegiatan'),
('Administrator','usulan');

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_rule` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert into `menu` values 
(1,'Data Induk',NULL,'/master-desa',0,NULL),
(2,'Desa',14,'/master-desa',0,NULL),
(3,'Kecamatan',14,'/master-kecamatan',1,NULL),
(4,'Jenis Organisasi',1,'/master-jenis-organisasi',2,NULL),
(5,'Data Institusi',1,'/master-institusi',4,NULL),
(6,'Jenis Musrenbang',1,'/jenis-musrenbang',3,NULL),
(7,'Status Usulan',23,'/master-status-usulan',5,NULL),
(8,'Jenis Usulan',23,'/master-jenis-usulan',6,NULL),
(9,'Berkas',1,'/master-berkas',7,NULL),
(10,'Prioritas Pembangunan',1,'/master-prioritas-pembangunan',8,NULL),
(11,'Tahun Pemilihan',22,'/master-tahun-pemilihan',9,NULL),
(12,'Berkas Kegiatan',1,'/master-berkas-kegiatan',10,NULL),
(13,'Daerah Pemilihan',22,'/master-daerah-pemilihan',11,NULL),
(14,'Organisasi',NULL,'/master-organisasi',1,NULL),
(15,'Kepegawaian',1,'/master-kepegawaian',13,NULL),
(16,'Berkas Kegiatan',1,'/master-berkas-kegiatan',14,NULL),
(17,'Fraksi',22,'/master-fraksi',15,NULL),
(18,'Dapil Kecamatan',22,'/master-dapil-kec',16,NULL),
(19,'Partai',22,'/master-partai',17,NULL),
(20,'Border Desa',1,'/master-border-desa',18,NULL),
(22,'DPRD',NULL,'/master-partai',2,NULL),
(23,'Usulan',NULL,'/master-jenis-usulan',4,NULL),
(24,'Pimpinan Organisasi',22,'/master-pimpinan-organisasi',3,NULL),
(25,'Kelompok Usulan',23,'/master-kelompok-usulan',1,NULL),
(26,'kegiatan',23,'/kegiatan',4,NULL),
(27,'Pendamping Kegiatan',23,'/pendamping-kegiatan',5,NULL),
(28,'Master Kamus Usulan',23,'/master-kamus-usulan',7,NULL),
(29,'Anggota DPRD',22,'/daftar-anggota-dprd',5,NULL),
(30,'Kelompok Usulan Organisasi',23,'/kelompok-usulan-organisasi',8,NULL),
(31,'Kepala Desa',14,'/master-kepala-desa',3,NULL),
(32,'Usulan',23,'/usulan',8,NULL),
(33,'Detail Usulan',23,'/detail-usulan',9,NULL),
(34,'Berkas Usulan',23,'/berkas-usulan',10,NULL);

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `migration` */

insert into `migration` values 
('m000000_000000_base',1497187670),
('m140506_102106_rbac_init',1497188531),
('m140602_111327_create_menu_table',1497187919),
('m160312_050000_create_user',1497187919),
('m170614_141827_create_tabel_master_desa',1497688499),
('m170614_141944_create_tabel_master_border_desa',1497688515),
('m170614_142006_create_tabel_master_kepala_desa',1497688532),
('m170617_033644_table_master_jenis_organisasi',1497685696),
('m170617_033927_table_master_organisasi',1497685737),
('m170617_034448_tabel_usulan',1497687763),
('m170617_035001_table_master_pimpinan_organisasi',1497685804),
('m170617_035020_tabel_detail_usulan',1497687806),
('m170617_035618_table_jenis_musrenbang',1497685848),
('m170617_035928_tabel_berkas_usulan',1497687851),
('m170617_040020_table_master_kepegawaian',1497686020),
('m170617_040226_table_master_institusi',1497685948),
('m170617_040442_tabel_master_tahun_pemilihan',1497686585),
('m170617_040442_table_master_status_kegiatan',1497686162),
('m170617_040629_table_master_status_usulan',1497686129),
('m170617_040715_table_master_berkas',1497686207),
('m170617_040730_tabel_master_daerah_pemilihan',1497686655),
('m170617_040833_table_master_prioritas_pembangunan',1497686252),
('m170617_040959_tabel_master_partai',1497686702),
('m170617_041109_tabel_master_fraksi',1497686754),
('m170617_041330_tabel_master_dapil_kec',1497686813),
('m170617_041555_table_master_berkas_kegiatan',1497688032),
('m170617_041725_table_kegiatan',1497687702),
('m170617_041835_tabel_daftar_anggota_dprd',1497687070),
('m170617_042829_tabel_master_jenis_usulan',1497687478),
('m170617_043017_tabel_kelompok_usulan_organisasi',1497687575),
('m170617_043206_table_pendamping_kegiatan',1497687670);

/*Table structure for table `plan_berkas_kegiatan` */

DROP TABLE IF EXISTS `plan_berkas_kegiatan`;

CREATE TABLE `plan_berkas_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_berkas` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `FK_plan_berkas_kegiatan` (`id_jenis_berkas`),
  CONSTRAINT `FK_plan_berkas_kegiatan` FOREIGN KEY (`id_jenis_berkas`) REFERENCES `plan_master_berkas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_berkas_kegiatan` */

insert into `plan_berkas_kegiatan` values 
(1,1,'-','2017-06-17 18:48:52','2017-06-17 18:53:29',1,1,10);

/*Table structure for table `plan_berkas_usulan` */

DROP TABLE IF EXISTS `plan_berkas_usulan`;

CREATE TABLE `plan_berkas_usulan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_berkas` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-berkas-usulan-id_berkas` (`id_berkas`),
  KEY `fk-berkas-usulan-id_usulan` (`id_usulan`),
  CONSTRAINT `fk-berkas-usulan-id_berkas` FOREIGN KEY (`id_berkas`) REFERENCES `plan_master_berkas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-berkas-usulan-id_usulan` FOREIGN KEY (`id_usulan`) REFERENCES `plan_usulan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_berkas_usulan` */

insert into `plan_berkas_usulan` values 
(1,1,'-',1,'2017-06-17 20:20:50','2017-06-17 20:20:50',1,1,10);

/*Table structure for table `plan_daftar_anggota_dprd` */

DROP TABLE IF EXISTS `plan_daftar_anggota_dprd`;

CREATE TABLE `plan_daftar_anggota_dprd` (
  `kode_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_dapil` int(11) NOT NULL,
  `id_fraksi` int(11) NOT NULL,
  `id_partai` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`kode_anggota`),
  KEY `fk-daftar-anggota-dprd-id_dapil` (`id_dapil`),
  KEY `fk-daftar-anggota-dprd-id_fraksi` (`id_fraksi`),
  KEY `fk-daftar-anggota-dprd-id_partai` (`id_partai`),
  CONSTRAINT `fk-daftar-anggota-dprd-id_dapil` FOREIGN KEY (`id_dapil`) REFERENCES `plan_master_daerah_pemilihan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-daftar-anggota-dprd-id_fraksi` FOREIGN KEY (`id_fraksi`) REFERENCES `plan_master_fraksi` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-daftar-anggota-dprd-id_partai` FOREIGN KEY (`id_partai`) REFERENCES `plan_master_partai` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_daftar_anggota_dprd` */

insert into `plan_daftar_anggota_dprd` values 
(1,'Hotman','Jl. Tukka','1995-09-07 00:00:00','Laki-Laki',1,1,1,'2017-06-18 19:52:06','2017-06-18 19:52:06',3,3,10);

/*Table structure for table `plan_detail_usulan` */

DROP TABLE IF EXISTS `plan_detail_usulan`;

CREATE TABLE `plan_detail_usulan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_status_usulan` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `satuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga_satuan` double NOT NULL,
  `id_prioritas` int(11) NOT NULL,
  `id_kelompok_usulan` int(11) NOT NULL,
  `tgl_proses` datetime NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-detail-usulan-id_status_usulan` (`id_status_usulan`),
  KEY `fk-detail-usulan-id_usulan` (`id_usulan`),
  KEY `fk-detail-usulan-id_prioritas` (`id_prioritas`),
  KEY `fk-detail-usulan-id_kelompok_usulan` (`id_kelompok_usulan`),
  CONSTRAINT `fk-detail-usulan-id_kelompok_usulan` FOREIGN KEY (`id_kelompok_usulan`) REFERENCES `plan_master_kelompok_usulan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-detail-usulan-id_prioritas` FOREIGN KEY (`id_prioritas`) REFERENCES `plan_master_prioritas_pembangunan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-detail-usulan-id_status_usulan` FOREIGN KEY (`id_status_usulan`) REFERENCES `plan_master_status_usulan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-detail-usulan-id_usulan` FOREIGN KEY (`id_usulan`) REFERENCES `plan_usulan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_detail_usulan` */

insert into `plan_detail_usulan` values 
(1,1,1,'1',1000,1,1,'2017-07-17 00:00:00','-','2017-06-17 20:26:15','2017-06-17 20:26:15',1,1,10);

/*Table structure for table `plan_jenis_musrenbang` */

DROP TABLE IF EXISTS `plan_jenis_musrenbang`;

CREATE TABLE `plan_jenis_musrenbang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_jenis_musrenbang` */

insert into `plan_jenis_musrenbang` values 
(1,'Musrenbang Desa','2017-06-17 17:55:19','2017-06-21 11:20:31',1,1,10),
(2,'Musrenbang Kecamatan','2017-06-17 17:56:03','2017-06-17 17:56:03',1,1,10),
(3,'Pokok-Pokok Pikiran DPRD','2017-06-17 17:57:24','2017-06-17 17:57:24',1,1,10),
(4,'Rencana Kerja SKPD','2017-06-17 17:57:57','2017-06-17 17:57:57',1,1,10),
(5,'Musrenbang Kabupaten','2017-06-17 17:58:21','2017-06-17 17:58:21',1,1,10);

/*Table structure for table `plan_kegiatan` */

DROP TABLE IF EXISTS `plan_kegiatan`;

CREATE TABLE `plan_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime NOT NULL,
  `id_jenis_musrenbang` int(11) NOT NULL,
  `id_organisasi` int(11) NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agenda` text COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `file_absen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `id_pendamping` int(11) NOT NULL,
  `id_status_kegiatan` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-kegiatan-id_jenis_musrenbang` (`id_jenis_musrenbang`),
  KEY `fk-kegiatan-id_organisasi` (`id_organisasi`),
  KEY `fk-kegiatan-id_pendamping` (`id_pendamping`),
  KEY `fk-kegiatan-id_status_kegiatan` (`id_status_kegiatan`),
  CONSTRAINT `fk-kegiatan-id_jenis_musrenbang` FOREIGN KEY (`id_jenis_musrenbang`) REFERENCES `plan_jenis_musrenbang` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-kegiatan-id_organisasi` FOREIGN KEY (`id_organisasi`) REFERENCES `plan_master_organisasi` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-kegiatan-id_pendamping` FOREIGN KEY (`id_pendamping`) REFERENCES `plan_pendamping_kegiatan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_kegiatan` */

insert into `plan_kegiatan` values 
(1,'2017-06-17 19:55:00',1,1,'Auditorium IT DEL','1. Pembahasan Usulan\r\n',20,'-','2017-06-17 19:55:00','2017-06-17 20:55:00',1,1,'2017-06-17 20:02:22','2017-06-17 20:02:22',1,1,10);

/*Table structure for table `plan_kelompok_usulan_organisasi` */

DROP TABLE IF EXISTS `plan_kelompok_usulan_organisasi`;

CREATE TABLE `plan_kelompok_usulan_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelompok_usulan` int(11) NOT NULL,
  `id_jenis_organisasi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-kelompok-usulan-organisasi-id_kelompok_usulan` (`id_kelompok_usulan`),
  KEY `fk-kelompok-usulan-organisasi-id_jenis_organisasi` (`id_jenis_organisasi`),
  CONSTRAINT `fk-kelompok-usulan-organisasi-id_jenis_organisasi` FOREIGN KEY (`id_jenis_organisasi`) REFERENCES `plan_master_jenis_organisasi` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-kelompok-usulan-organisasi-id_kelompok_usulan` FOREIGN KEY (`id_kelompok_usulan`) REFERENCES `plan_master_kelompok_usulan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_kelompok_usulan_organisasi` */

insert into `plan_kelompok_usulan_organisasi` values 
(1,1,1,'2017-06-17 20:08:06','2017-06-17 20:08:06',1,1,10),
(2,1,1,'2017-06-17 20:08:07','2017-06-17 20:08:07',1,1,10);

/*Table structure for table `plan_master_berkas` */

DROP TABLE IF EXISTS `plan_master_berkas`;

CREATE TABLE `plan_master_berkas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_berkas` */

insert into `plan_master_berkas` values 
(1,'Dokumen ','2017-06-17 18:14:32','2017-06-21 11:31:54',1,1,10),
(2,'Foto','2017-06-17 18:15:00','2017-06-17 18:15:00',1,1,10),
(3,'Video','2017-06-17 18:15:14','2017-06-17 18:15:14',1,1,10);

/*Table structure for table `plan_master_berkas_kegiatan` */

DROP TABLE IF EXISTS `plan_master_berkas_kegiatan`;

CREATE TABLE `plan_master_berkas_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mandatori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_berkas_kegiatan` */

insert into `plan_master_berkas_kegiatan` values 
(1,'Berita Acara ','Wajib','2017-06-17 18:22:27','2017-06-21 11:51:11',1,1,10),
(2,'Absen','Wajib','2017-06-17 18:22:49','2017-06-17 18:22:49',1,1,10),
(3,'Foto','Tambahan','2017-06-17 18:23:30','2017-06-17 18:23:30',1,1,10),
(4,'Undangan','Wajib','2017-06-17 18:23:55','2017-06-17 18:24:11',1,1,10);

/*Table structure for table `plan_master_border_desa` */

DROP TABLE IF EXISTS `plan_master_border_desa`;

CREATE TABLE `plan_master_border_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `id_desa` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-border-id_desa` (`id_desa`),
  CONSTRAINT `fk-border-id_desa` FOREIGN KEY (`id_desa`) REFERENCES `plan_master_desa` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_border_desa` */

insert into `plan_master_border_desa` values 
(1,123,456,1,'2017-06-17 19:05:19','2017-06-17 19:05:19',1,1,10),
(2,324,1231,2,'2017-06-18 20:30:08','2017-06-18 20:30:08',3,3,10);

/*Table structure for table `plan_master_daerah_pemilihan` */

DROP TABLE IF EXISTS `plan_master_daerah_pemilihan`;

CREATE TABLE `plan_master_daerah_pemilihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pemilihan` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_daerah_pemilihan` */

insert into `plan_master_daerah_pemilihan` values 
(1,1,'Daerah Pemilihan I','-','2017-06-17 18:41:18','2017-06-17 18:41:18',1,1,10),
(2,1,'Daerah Pemilihan II','-','2017-06-17 18:41:52','2017-06-17 18:41:52',1,1,10);

/*Table structure for table `plan_master_dapil_kec` */

DROP TABLE IF EXISTS `plan_master_dapil_kec`;

CREATE TABLE `plan_master_dapil_kec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun_pemilihan` int(11) NOT NULL,
  `id_dapil` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-master-dapil-kec-id_tahun_pemilihan` (`id_tahun_pemilihan`),
  KEY `fk-master-dapil-kec-id_dapil` (`id_dapil`),
  KEY `fk-master-dapil-kec-id_kecamatan` (`id_kecamatan`),
  CONSTRAINT `fk-master-dapil-kec-id_dapil` FOREIGN KEY (`id_dapil`) REFERENCES `plan_master_daerah_pemilihan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-master-dapil-kec-id_kecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `plan_master_kecamatan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-master-dapil-kec-id_tahun_pemilihan` FOREIGN KEY (`id_tahun_pemilihan`) REFERENCES `plan_master_tahun_pemilihan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_dapil_kec` */

insert into `plan_master_dapil_kec` values 
(1,1,1,1,'2017-06-17 19:01:43','2017-06-17 19:01:43',1,1,10);

/*Table structure for table `plan_master_desa` */

DROP TABLE IF EXISTS `plan_master_desa`;

CREATE TABLE `plan_master_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`nama`),
  KEY `fk-master-desa-id_desa` (`id_kecamatan`),
  CONSTRAINT `fk-master-desa-id_desa` FOREIGN KEY (`id_kecamatan`) REFERENCES `plan_master_kecamatan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_desa` */

insert into `plan_master_desa` values 
(1,'Parbubu I','2.01','98.97',1,'2017-06-17 18:43:10','2017-06-17 18:43:10',1,1,10),
(2,'Parbubu II','2.02','98.98',2,'2017-06-17 18:44:24','2017-06-17 18:44:24',1,1,10);

/*Table structure for table `plan_master_fraksi` */

DROP TABLE IF EXISTS `plan_master_fraksi`;

CREATE TABLE `plan_master_fraksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun_pemilihan` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-master-fraksi-id_tahun_pemilihan` (`id_tahun_pemilihan`),
  CONSTRAINT `fk-master-fraksi-id_tahun_pemilihan` FOREIGN KEY (`id_tahun_pemilihan`) REFERENCES `plan_master_tahun_pemilihan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_fraksi` */

insert into `plan_master_fraksi` values 
(1,1,'Fraksi PDIP','2017-06-17 18:57:43','2017-06-17 18:57:43',1,1,10),
(2,1,'Fraksi Golongan Karya','2017-06-17 18:58:26','2017-06-17 18:58:26',1,1,10);

/*Table structure for table `plan_master_institusi` */

DROP TABLE IF EXISTS `plan_master_institusi`;

CREATE TABLE `plan_master_institusi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_institusi` */

insert into `plan_master_institusi` values 
(1,'Badan Perencanaan Pembangunan Daerah  ','2017-06-17 18:07:08','2017-06-21 11:25:54',1,1,10),
(2,'Dinas Perhubungan','2017-06-17 18:08:28','2017-06-17 18:08:28',1,1,10);

/*Table structure for table `plan_master_jenis_organisasi` */

DROP TABLE IF EXISTS `plan_master_jenis_organisasi`;

CREATE TABLE `plan_master_jenis_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pimpinan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_jenis_organisasi` */

insert into `plan_master_jenis_organisasi` values 
(1,'Kabupaten','Bupati','Daerah Tingkat 2','2017-06-17 17:47:17','2017-06-21 10:54:42',1,1,10),
(2,'Kecamatan','Camat','-','2017-06-17 17:47:55','2017-06-17 17:47:55',1,1,10),
(3,'Desa','Kepala Desa','-','2017-06-17 17:48:20','2017-06-17 17:48:20',1,1,10),
(4,'SKPD','Kepala ','-','2017-06-17 17:49:32','2017-06-17 17:49:54',1,1,10);

/*Table structure for table `plan_master_jenis_usulan` */

DROP TABLE IF EXISTS `plan_master_jenis_usulan`;

CREATE TABLE `plan_master_jenis_usulan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_jenis_usulan` */

insert into `plan_master_jenis_usulan` values 
(1,'Fisik','2017-06-17 19:34:56','2017-06-17 19:34:56',1,1,10),
(2,'Non Fisik','2017-06-17 19:35:24','2017-06-17 19:35:24',1,1,10);

/*Table structure for table `plan_master_kamus_usulan` */

DROP TABLE IF EXISTS `plan_master_kamus_usulan`;

CREATE TABLE `plan_master_kamus_usulan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelompok_usulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `plafon` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_kamus_usulan` */

insert into `plan_master_kamus_usulan` values 
(1,1,2014,200,'2017-06-17 19:52:30','2017-06-21 10:42:09',1,1,10);

/*Table structure for table `plan_master_kecamatan` */

DROP TABLE IF EXISTS `plan_master_kecamatan`;

CREATE TABLE `plan_master_kecamatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_kecamatan` */

insert into `plan_master_kecamatan` values 
(1,'Tarutung','2.0121691','98.979747','2017-06-15 21:49:32','2017-06-15 22:03:58',1,1,0),
(2,'Siatas Barita','123','456','2017-06-17 17:38:18','2017-06-17 17:38:18',1,1,10);

/*Table structure for table `plan_master_kelompok_usulan` */

DROP TABLE IF EXISTS `plan_master_kelompok_usulan`;

CREATE TABLE `plan_master_kelompok_usulan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organisasi` int(11) NOT NULL,
  `id_jenis_usulan` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-master-kelompok-usulan-id_organisasi` (`id_organisasi`),
  CONSTRAINT `fk-master-kelompok-usulan-id_organisasi` FOREIGN KEY (`id_organisasi`) REFERENCES `plan_master_organisasi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_kelompok_usulan` */

insert into `plan_master_kelompok_usulan` values 
(1,2,1,'Pembangunan Irigasi','-','2017-06-17 19:36:36','2017-06-17 19:36:36',1,1,10),
(2,2,1,'Pembangunan Jembatan','-','2017-06-17 19:37:13','2017-06-17 19:37:13',1,1,10);

/*Table structure for table `plan_master_kepala_desa` */

DROP TABLE IF EXISTS `plan_master_kepala_desa`;

CREATE TABLE `plan_master_kepala_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_desa` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-kepala-desa-id_desa` (`id_desa`),
  CONSTRAINT `fk-kepala-desa-id_desa` FOREIGN KEY (`id_desa`) REFERENCES `plan_master_desa` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_kepala_desa` */

insert into `plan_master_kepala_desa` values 
(1,'Tanaka',1,'2017-06-18 20:37:45','2017-06-18 20:37:45',1,1,10);

/*Table structure for table `plan_master_kepegawaian` */

DROP TABLE IF EXISTS `plan_master_kepegawaian`;

CREATE TABLE `plan_master_kepegawaian` (
  `nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_institusi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`nip`),
  KEY `fk-master-kepegawaian-id_kepegawaian` (`id_institusi`),
  CONSTRAINT `fk-master-kepegawaian-id_kepegawaian` FOREIGN KEY (`id_institusi`) REFERENCES `plan_master_institusi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_kepegawaian` */

insert into `plan_master_kepegawaian` values 
('1965121300001','Albertus Silaen',2,'2017-06-17 19:40:37','2017-06-17 19:40:37',1,1,10);

/*Table structure for table `plan_master_organisasi` */

DROP TABLE IF EXISTS `plan_master_organisasi`;

CREATE TABLE `plan_master_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_organisasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-master-organisasi-id_organisasi` (`id_jenis_organisasi`),
  CONSTRAINT `fk-master-organisasi-id_organisasi` FOREIGN KEY (`id_jenis_organisasi`) REFERENCES `plan_master_jenis_organisasi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `plan_master_organisasi` */

insert into `plan_master_organisasi` values 
(1,3,'1','2017-06-17 19:09:31','2017-06-17 19:18:51',1,1,10),
(2,4,'1','2017-06-17 19:33:14','2017-06-17 19:33:14',1,1,10);

/*Table structure for table `plan_master_partai` */

DROP TABLE IF EXISTS `plan_master_partai`;

CREATE TABLE `plan_master_partai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_partai` */

insert into `plan_master_partai` values 
(1,'PDIP','2017-06-17 19:03:40','2017-06-17 19:03:40',1,1,10),
(2,'Golongan Karya','2017-06-17 19:03:59','2017-06-17 19:03:59',1,1,10);

/*Table structure for table `plan_master_pimpinan_organisasi` */

DROP TABLE IF EXISTS `plan_master_pimpinan_organisasi`;

CREATE TABLE `plan_master_pimpinan_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organisasi` int(11) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-master-pimpinan-organisasi-id_pimpinan_organisasi` (`id_organisasi`),
  CONSTRAINT `fk-master-pimpinan-organisasi-id_pimpinan_organisasi` FOREIGN KEY (`id_organisasi`) REFERENCES `plan_master_organisasi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_pimpinan_organisasi` */

insert into `plan_master_pimpinan_organisasi` values 
(1,1,'2014-06-01','2017-07-01','Frengki Simatupang','2017-06-17 19:31:08','2017-06-17 19:31:08',1,1,10);

/*Table structure for table `plan_master_prioritas_pembangunan` */

DROP TABLE IF EXISTS `plan_master_prioritas_pembangunan`;

CREATE TABLE `plan_master_prioritas_pembangunan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_prioritas_pembangunan` */

insert into `plan_master_prioritas_pembangunan` values 
(1,'Pembangunan ','-','2017-06-17 18:16:16','2017-06-17 18:16:16',1,1,10),
(2,'Pendidikan dan Kesehatan','-','2017-06-17 18:16:48','2017-06-17 18:16:48',1,1,10),
(3,'Penataan Pasar Tradisional','-','2017-06-17 18:17:32','2017-06-17 18:17:32',1,1,10),
(4,'Toleransi Beragama','-','2017-06-17 18:17:53','2017-06-17 18:17:53',1,1,10),
(5,'Pelayanan Administrasi Kependudukan Gratis','-','2017-06-17 18:18:18','2017-06-17 18:19:59',1,1,10),
(6,'Keamanan dan Kenyamanan','-','2017-06-17 18:18:58','2017-06-17 18:20:22',1,1,10),
(7,'Iklim Investasi','-','2017-06-17 18:20:40','2017-06-17 18:20:40',1,1,10),
(8,'Fasilitas Publik','-','2017-06-17 18:20:55','2017-06-17 18:20:55',1,1,10);

/*Table structure for table `plan_master_status_kegiatan` */

DROP TABLE IF EXISTS `plan_master_status_kegiatan`;

CREATE TABLE `plan_master_status_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_status_kegiatan` */

/*Table structure for table `plan_master_status_usulan` */

DROP TABLE IF EXISTS `plan_master_status_usulan`;

CREATE TABLE `plan_master_status_usulan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_status_usulan` */

insert into `plan_master_status_usulan` values 
(1,'Diajukan','-','2017-06-17 18:09:38','2017-06-17 18:09:38',1,1,10),
(2,'Diterima','-','2017-06-17 18:10:03','2017-06-17 18:10:03',1,1,10),
(3,'Ditolak','-','2017-06-17 18:10:23','2017-06-17 18:10:23',1,1,10),
(4,'Diterima dengan Revisi','-','2017-06-17 18:10:46','2017-06-17 18:10:46',1,1,10),
(5,'Terkompilasi','-','2017-06-17 18:11:11','2017-06-17 18:11:11',1,1,10);

/*Table structure for table `plan_master_tahun_pemilihan` */

DROP TABLE IF EXISTS `plan_master_tahun_pemilihan`;

CREATE TABLE `plan_master_tahun_pemilihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu_mulai` int(11) NOT NULL,
  `waktu_selesai` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_master_tahun_pemilihan` */

insert into `plan_master_tahun_pemilihan` values 
(1,2014,2019,'2017-06-17 18:31:54','2017-06-17 18:31:54',1,1,10);

/*Table structure for table `plan_migration` */

DROP TABLE IF EXISTS `plan_migration`;

CREATE TABLE `plan_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `plan_migration` */

insert into `plan_migration` values 
('m000000_000000_base',1497492453),
('m170614_141827_create_tabel_master_desa',1497523750),
('m170614_141944_create_tabel_master_border_desa',1497523750),
('m170614_142006_create_tabel_master_kepala_desa',1497523751),
('m170615_142546_create_tabel_master_kecamatan',1497537203);

/*Table structure for table `plan_pendamping_kegiatan` */

DROP TABLE IF EXISTS `plan_pendamping_kegiatan`;

CREATE TABLE `plan_pendamping_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_pegawai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_pendamping_kegiatan` */

insert into `plan_pendamping_kegiatan` values 
(1,'123456','2017-06-17 20:01:55','2017-06-17 20:01:55',1,1,10);

/*Table structure for table `plan_usulan` */

DROP TABLE IF EXISTS `plan_usulan`;

CREATE TABLE `plan_usulan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(11) NOT NULL,
  `id_kamus_usulan` int(11) NOT NULL,
  `permasalahan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_usulan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volume` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`),
  KEY `fk-usulan-id_kegiatan` (`id_kegiatan`),
  KEY `fk-usulan-id_kamus_usulan` (`id_kamus_usulan`),
  CONSTRAINT `fk-usulan-id_kamus_usulan` FOREIGN KEY (`id_kamus_usulan`) REFERENCES `plan_master_kamus_usulan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-usulan-id_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `plan_kegiatan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_usulan` */

insert into `plan_usulan` values 
(1,1,1,'Sering terjadi Banjir','Pembangunan Irigasi di depan Rumah Pak RT',3,123,456,'2017-06-17 20:10:40','2017-06-17 20:10:40',1,1,10);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert into `user` values 
(1,'admin','4s_Q2_hgDqQHvx5_cYKF3TWIOpwZA6Qh','$2y$13$jQE7Fpuji/72QtnkIIcvi.PXnPXkKUwRgAU23SedFh.zodbir7JFy',NULL,'admin@gmail.com',10,1497188810,1497188810),
(2,'bappeda','ajaKMLnjFDqudIbi6LWMgCW1i-EABEAL','$2y$13$rixn0hyufKOJiYYHA55FZON3qz8/2mCdY7DbwhkqsmijEI/Snd4Eq',NULL,'bappeda@gmail.com',10,1497673907,1497673907),
(3,'if314029','pbk1DgTxXexgstgSaSt7QkLYIryHriOs','$2y$13$N1D5T47/R2InQpiWLLjOje0e31e31ht8aspTN/kLtKrIpZdEKi9VS',NULL,'if314029@gmail.com',10,1497702330,1497702330);
