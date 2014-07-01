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
$route["profile/user/(:any)"] = "main/profile/user/$1";
$route["profile/agent/(:any)"] = "main/profile/agent/$1";
$route["property"] = "main/property";
$route["furniture"] = "main/furniture";
$route["education"] = "main/education";
$route["property/(:any)"] = "main/property/$1";
$route["furniture/(:any)"] = "main/furniture/$1";
$route["education/(:any)"] = "main/education/$1";
$route["(.*)"] = "main/page/$1";
/*
$route["profile/user/message"] = "main/profile/user/message";
$route["profile/agent/message"] = "main/profile/agent/message";
$route["profile/user/mylist"] = "main/profile/user/mylist";
$route["profile/agent/mylist"] = "main/profile/agent/mylist";
$route["profile/user/wishlist"] = "main/profile/user/wishlist";
$route["profile/agent/wishlist"] = "main/profile/agent/wishlist";
$route["profile/user/message/view"] = "main/profile/user/message/view";
$route["profile/agent/message/view"] = "main/profile/agent/message/view";
$route["profile/user/message/compose"] = "main/profile/user/message/compose";
$route["profile/agent/message/compose"] = "main/profile/agent/message/compose";
*/
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */