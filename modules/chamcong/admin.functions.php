<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 21 Apr 2014 08:10:03 GMT
 */

if ( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) or ! defined( 'NV_IS_MODADMIN' ) ) die( 'Stop!!!' );

$submenu['main'] = $lang_module['main'];
$submenu['config'] = $lang_module['config'];
$submenu['nhanvien'] = $lang_module['nhanvien'];
$submenu['dilam'] = $lang_module['dilam'];

$allow_func = array( 'main', 'config', 'nhanvien', 'dilam');

define( 'NV_IS_FILE_ADMIN', true );

?>