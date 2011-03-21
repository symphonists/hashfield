<?php

	Class extension_hashfield extends Extension{
	
		public function about(){
			return array('name' => 'Field: Hash',
						 'version' => '1.1',
						 'release-date' => '2011-03-21',
						 'author' => array('name' => 'Symphony Community',
										   'website' => 'https://github.com/symphonists')
				 		);
		}
		
		public function uninstall(){
			Symphony::Database()->query("DROP TABLE `tbl_fields_hash`");
		}


		public function install(){

			return Symphony::Database()->query("CREATE TABLE `tbl_fields_hash` (
			  `id` int(11) unsigned NOT NULL auto_increment,
			  `field_id` int(11) unsigned NOT NULL,
			  PRIMARY KEY  (`id`),
			  UNIQUE KEY `field_id` (`field_id`)
			) TYPE=MyISAM");

		}
			
	}

?>