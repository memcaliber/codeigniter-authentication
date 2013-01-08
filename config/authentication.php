<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| Authentication
| -------------------------------------------------------------------
| This file contains the configuration for this CodeIgniter
| Authentication library.
|
*/

/*
| -------------------------------------------------------------------
| Collection tables
| -------------------------------------------------------------------
| Define the tables where the collections are stored.
|
*/

$config['collections']['users'] = 'users';
$config['collections']['roles'] = 'roles';
$config['collections']['logins'] = 'logins';
$config['collections']['permissions'] = 'permissions';

/*
| -------------------------------------------------------------------
| Joining fields
| -------------------------------------------------------------------
| Define the table and fields that the groups will be joined
| to the users.
|
*/

$config['join']['table'] = 'groups_users';
$config['join']['users'] = 'user_id';
$config['join']['groups'] = 'group_id';


/* End of file authentication.php */
/* Location: ./application/config/authentication.php */