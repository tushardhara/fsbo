<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main";
$route["register/user"] = "main/register/user";
$route["register/agent"] = "main/register/agent";
$route["profile/user"] = "main/profile/user";
$route["profile/agent"] = "main/profile/agent";
$route["profile/admin"] = "main/profile/admin";
$route["profile/moderator"] = "main/profile/moderator";
$route["profile/user/(:any)"] = "main/profile/user/$1";
$route["profile/agent/(:any)"] = "main/profile/agent/$1";
$route["profile/admin/(:any)"] = "main/profile/admin/$1";
$route["profile/moderator/(:any)"] = "main/profile/moderator/$1";
$route["profile/(:any)"] = "main/profile/$1";
$route["property"] = "main/property";
$route["furniture"] = "main/furniture";
$route["education"] = "main/education";
$route["property/(:any)"] = "main/property/$1";
$route["furniture/(:any)"] = "main/furniture/$1";
$route["education/(:any)"] = "main/education/$1";
$route["agent"] = "main/agent";
$route["agent/(:any)"] = "main/agent/$1";
$route["login_check"] = "login/login_check";
$route["logout"] = "login/logout";
$route["register_check"] = "login/register_check";
$route["login"] = "main/login";
$route["forgot"] = "main/forgot";
$route["forgot_check"] = "login/forgot_check";
$route["modify_check"] = "modify/modify_check";
$route["modify_option"] = "modify/modify_option";
$route["modify_property/(:any)"] = "modify/modify_property/$1";
$route["modify_education/(:any)"] = "modify/modify_education/$1";
$route["modify_furniture/(:any)"] = "modify/modify_furniture/$1";
$route["delete_image/(:any)"] = "modify/delete_image/$1";
$route["delete_image"] = "modify/delete_image";
$route["add_property"] = "add/add_property";
$route["add_furniture"] = "add/add_furniture";
$route["add_education"] = "add/add_education";
$route["add_wishlist"] = "add/add_wishlist";
$route["search"] = "main/search";
$route["test"] = "test";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */