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

$route['default_controller'] = "web/main_controller/index";
$route['404_override'] = '';
$route["asset/:any"] = "asset_controller/index";
$route["admin"] = "admin/root_controller/index";

$route["admin/news"] = "admin/news_controller/index";
$route["admin/choco_recipes"] = "admin/choco_recipes_controller/index";
$route["admin/choco_stories"] = "admin/choco_stories_controller/index";

$route["admin/news/new"] = "admin/news_controller/new_news_item";
$route["admin/choco_stories/new"] = "admin/choco_stories_controller/new_story";
$route["admin/choco_recipes/new"] = "admin/choco_recipes_controller/new_recipe";

$route["admin/news/create"] = "admin/news_controller/create";
$route["admin/choco_stories/create"] = "admin/choco_stories_controller/create";
$route["admin/choco_recipes/create"] = "admin/choco_recipes_controller/create";

$route["admin/news/(:num)"] = "admin/news_controller/show/$1";
$route["admin/choco_stories/(:num)"] = "admin/choco_stories_controller/show/$1";
$route["admin/choco_recipes/(:num)"] = "admin/choco_recipes_controller/show/$1";

$route["admin/news/(:num)/delete"] = "admin/news_controller/delete/$1";
$route["admin/choco_stories/(:num)/delete"] = "admin/choco_stories_controller/delete/$1";
$route["admin/choco_recipes/(:num)/delete"] = "admin/choco_recipes_controller/delete/$1";

$route["admin/news/(:num)/edit"] = "admin/news_controller/edit/$1";
$route["admin/choco_stories/(:num)/edit"] = "admin/choco_stories_controller/edit/$1";
$route["admin/choco_recipes/(:num)/edit"] = "admin/choco_recipes_controller/edit/$1";

$route["admin/news/update"] = "admin/news_controller/update";
$route["admin/choco_stories/update"] = "admin/choco_stories_controller/update";
$route["admin/choco_recipes/update"] = "admin/choco_recipes_controller/update";

$route["admin/carousel/update"] = "admin/carousel_controller/update";
$route["admin/carousel/(:num)/edit"] = "admin/carousel_controller/edit/$1";
$route["admin/carousel/(:num)/delete"] = "admin/carousel_controller/delete/$1";
$route["admin/carousel/(:num)"] = "admin/carousel_controller/show/$1";
$route["admin/carousel/create"] = "admin/carousel_controller/create";
$route["admin/carousel"] = "admin/carousel_controller/index";
$route["admin/carousel/new"] = "admin/carousel_controller/new_carousel";

$route["admin/items/update"] = "admin/items_controller/update";
$route["admin/items/create_from_xls"] = "admin/items_controller/create_from_xls";
$route["admin/items/(:num)/edit"] = "admin/items_controller/edit/$1";
$route["admin/items/(:num)/delete"] = "admin/items_controller/delete/$1";
$route["admin/items/(:num)"] = "admin/items_controller/show/$1";
$route["admin/items/create"] = "admin/items_controller/create";
$route["admin/items"] = "admin/items_controller/index";
$route["admin/items/new"] = "admin/items_controller/new_item";
$route["admin/items/index_by_category"] = "admin/items_controller/index_by_category";

$route["admin/categories/update"] = "admin/categories_controller/update";
$route["admin/categories/create_from_xls"] = "admin/categories_controller/create_from_xls";
$route["admin/categories/(:num)/edit"] = "admin/categories_controller/edit/$1";
$route["admin/categories/(:num)/delete"] = "admin/categories_controller/delete/$1";
$route["admin/categories/(:num)"] = "admin/categories_controller/show/$1";
$route["admin/categories/create"] = "admin/categories_controller/create";
$route["admin/categories"] = "admin/categories_controller/index";
$route["admin/categories/new"] = "admin/categories_controller/new_category";

$route["catalogue"] = "web/catalogue_controller/index";
$route["news"] = "web/news_controller/index";
$route["choco_stories"] = "web/choco_stories_controller/index";
$route["choco_recipes"] = "web/choco_recipes_controller/index";
$route["choco_stories/(:num)"] = "web/choco_stories_controller/show/$1";
$route["choco_recipes/(:num)"] = "web/choco_recipes_controller/show/$1";

$route["news/(:num)"] = "web/news_controller/show/$1";
$route["catalogue/index_by_category"] = "web/catalogue_controller/index_by_category";

$route["about"] = "web/about_controller/index";
$route["delivery"] = "web/delivery_controller/index";
$route["cart"] = "web/cart_controller/index";

$route["registration"] = "web/registration_controller/index";
$route["login"] = "web/login_controller/index";
$route["logout"] = "web/login_controller/logout";
$route["admin/login"] = "admin/login_controller/index";
$route["admin/logout"] = "admin/login_controller/logout";

$route["add_to_cart"] = "web/catalogue_controller/add_to_cart";
$route["reserve_call"] = "web/main_controller/reserve_call";
$route["feedback"] = "web/about_controller/feedback";
$route["delete_from_cart"] = "web/cart_controller/delete";
$route["make_order"] = "web/cart_controller/make_order";

$route["admin/orders"] = "admin/orders_controller/index";
$route["admin/orders/(:num)"] = "admin/orders_controller/show/$1";
$route["admin/orders/(:num)/delete"] = "admin/orders_controller/delete/$1";
$route["admin/orders/(:num)/close"] = "admin/orders_controller/close/$1";
$route["empty_cart"] = "web/cart_controller/empty_cart";



/* End of file routes.php */
/* Location: ./application/config/routes.php */