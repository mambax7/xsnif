<?php
$my_xsnif_name = basename( dirname( __FILE__ ) ) ;
$modversion['name'] = "Xoops S.N.I.F.";//name of module
$modversion['version'] = 1.00;
$modversion['description'] = "Simple and Nice Index File by Kai Blankenhorn made into a xoops module with admin.";
$modversion['author'] = "Nathan Fluet BadCase.net";
$modversion['credits'] = "Simple and Nice Index File by Kai Blankenhorn";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "admin/module_logo.gif";
$modversion['dirname'] = "$my_xsnif_name";//name of directory on server

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
//$modversion['sqlfile']['mysql'] = "admin/sql/xsnif_data.sql";
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = $my_xsnif_name ."_data";

// Admin things
/*
 * Currently, there isn't anything to admin
 * xtodo: User sync, Group sync, and other "admin" functions
 */
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu/Sub Menu
$modversion['hasMain'] = 1;//make 0 to not have this appear in main menu

?>