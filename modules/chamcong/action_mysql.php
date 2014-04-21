<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 21 Apr 2014 08:10:03 GMT
 */

if ( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS `".$db_config['prefix']."_".$lang."_".$module_data."_chamcong`";


$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE `".$db_config['prefix']."_".$lang."_".$module_data."_chamcong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titles` varchar(255) NOT NULL,
  `numbers` int(11) NOT NULL,
  `strings` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;";

?>