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

$route['default_controller'] = "systems";
$route['404_override'] = '';
// System is a reserved word
$route['system/(.*?)'] = 'computersystem/$1';
$route['datacenter/(.*?)'] = 'datacentercontroller/$1';
$route['availabilityzone/(.*?)'] = 'availabilityzonecontroller/$1';
$route['network/subnet/(.*?)'] = 'network/subnetcontroller/$1';
$route['interface/(.*?)'] = 'interfacecontroller/$1';
$route['group/(.*?)'] = 'groupcontroller/$1';
$route['groupmember/(.*?)'] = 'groupmembercontroller/$1';
$route['grouprange/(.*?)'] = 'grouprangecontroller/$1';
$route['platform/(.*?)'] = 'platformcontroller/$1';
$route['dhcp/class/(.*?)'] = 'dhcp/classcontroller/$1';
$route['dhcp/subnetoption/(.*?)'] = 'dhcp/subnetoptioncontroller/$1';
$route['dhcp/rangeoption/(.*?)'] = 'dhcp/rangeoptioncontroller/$1';
$route['dhcp/globaloption/(.*?)'] = 'dhcp/globaloptioncontroller/$1';
$route['dhcp/classoption/(.*?)'] = 'dhcp/classoptioncontroller/$1';
$route['dns/default_controller'] = 'dns/welcome';
$route['network/vlan/(.*?)'] = 'network/vlancontroller/$1';
$route['network/switchport/(.*?)'] = 'network/switchportcontroller/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
