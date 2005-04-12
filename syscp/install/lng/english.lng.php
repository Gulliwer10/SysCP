<?php
/**
 * filename: $Source$
 * begin: Friday, Sep 03, 2004
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Florian Lippert <flo@redenswert.de>
 * @copyright (C) 2003-2004 Florian Lippert
 * @package Language
 * @version $Id$
 */

/**
 * Begin
 */
$lng['install']['language'] = 'Language';
$lng['install']['welcome'] = 'Welcome to SysCP Installation';
$lng['install']['welcometext'] = 'Thank you for choosing SysCP. Please fill out the following fields with the required information to start the installation.<br /><b>Attantion:</b> If the database you chose for SysCP already exists on your System, it will be erased with all containing data!';
$lng['install']['database'] = 'Database';
$lng['install']['mysql_hostname'] = 'MySQL-Hostname';
$lng['install']['mysql_database'] = 'MySQL-Database';
$lng['install']['mysql_unpriv_user'] = 'Username for the unprivileged MySQL-account';
$lng['install']['mysql_unpriv_pass'] = 'Password for the unprivileged MySQL-account';
$lng['install']['mysql_root_user'] = 'Username for the MySQL-root-account';
$lng['install']['mysql_root_pass'] = 'Password for the MySQL-root-account';
$lng['install']['admin_account'] = 'Administrator Account';
$lng['install']['admin_user'] = 'Administrator Username';
$lng['install']['admin_pass'] = 'Administrator Password';
$lng['install']['admin_pass_confirm'] = 'Administrator-Password (confirm)';
$lng['install']['serversettings'] = 'Serversettings';
$lng['install']['servername'] = 'Servername (FQDN)';
$lng['install']['serverip'] = 'Serverip';
$lng['install']['next'] = 'Next';

/**
 * Progress
 */
$lng['install']['testing_mysql'] = 'Testing if MySQL-root-username and password are correct...';
$lng['install']['erasing_old_db'] = 'Erasing old Database...';
$lng['install']['create_mysqluser_and_db'] = 'Creating MySQL-database and username...';
$lng['install']['testing_new_db'] = 'Testing if MySQL-database and username have been created correctly...';
$lng['install']['importing_data'] = 'Importing data into MySQL-database...';
$lng['install']['changing_data'] = 'Changing imported data...';
$lng['install']['adding_admin_user'] = 'Adding Administrator Account...';
$lng['install']['creating_configfile'] = 'Creating configfile...';
$lng['install']['creating_configfile_succ'] = 'OK, userdata.inc.php was saved in lib/.';
$lng['install']['creating_configfile_temp'] = 'File was saved in /tmp/userdata.inc.php, please move to lib/.';
$lng['install']['creating_configfile_failed'] = 'Cannot create lib/userdata.inc.php, please create it manually with the following data:';
$lng['install']['syscp_succ_installed'] = 'SysCP was installed successfully.';
$lng['install']['click_here_to_login'] = 'Click here to login.';

?>