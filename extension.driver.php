<?php

	Class extension_hashfield extends Extension{

		public function install(){
			return Symphony::Database()->query(
				"CREATE TABLE `tbl_fields_hash` (
				`id` int(11) unsigned NOT NULL auto_increment,
				`field_id` int(11) unsigned NOT NULL,
				PRIMARY KEY  (`id`),
				UNIQUE KEY `field_id` (`field_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
		}

		public function uninstall(){
			return Symphony::Database()->query("DROP TABLE `tbl_fields_hash`");
		}

	}
