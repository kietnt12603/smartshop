<?php
global $id;
$routes['default_controller'] = 'home';

/* Client */
$routes['home'] = 'home/index';
$routes['san-pham'] = 'product/index';
$routes['san-pham/'.$id] = 'product/detail/'.$id;
$routes['danh-muc/'.$id] = 'product/product/'.$id;
$routes['login'] = 'Acccout/index';
$routes['login/dn'] = 'Acccout/login';
$routes['dangky'] = 'Acccout/register';

$routes['dangky/dk'] = 'Acccout/dk';

$routes['logout'] = 'Acccout/logout';
$routes['lienhe'] = 'contact/index';
$routes['lienhe/lh'] = 'contact/lienhe';
$routes['bai-viet'] = 'blog/index';
$routes['tk'] = 'search/index';
$routes['viewcart'] = 'cart/index';
$routes['addtocart']= 'cart/addtocart';
$routes['delcart']= 'cart/delcart';
$routes['updatecart']= 'cart/updatecart';
$routes['updatecartsl']= 'cart/updatecartsl';
$routes['addOrder']= 'cart/addOrder';
$routes['checkmybill/'.$id] = 'cart/checkmybill/'.$id;
$routes['billDetail/'.$id] = 'cart/billDetail/'.$id;
$routes['huyhoadon'] = 'cart/huyhoadon';

/* Admim */
$routes['admin'] = 'admin/dashboard/index';
$routes['admin/category'] = 'admin/category/index';
$routes['admin/category_search'] = 'admin/category/search';
$routes['admin/category/add'] = 'admin/category/add';
$routes['admin/category/insert_category'] = 'admin/category/insert_category';
$routes['admin/category/update/'.$id] = 'admin/category/update/'.$id;
$routes['admin/category/update'] = 'admin/category/update';
$routes['admin/category/xoa'] = 'admin/category/delete';
$routes['admin/category/update_Category/'] = 'admin/category/update_Category/';
$routes['admin/category/update_Category/'.$id] = 'admin/category/update_Category/'.$id;
$routes['admin/category/xoa'] = 'admin/category/delete';
$routes['admin/category/checkname'] = 'admin/category/checkname';
// $routes['admin/category/delete_Category/'] = 'admin/category/delete_Category/';
// $routes['admin/category/delete_Category/'.$id] = 'admin/category/delete_Category/'.$id;

$routes['admin/product'] = 'admin/product/index';
$routes['admin/product_search'] = 'admin/product/search';
$routes['admin/product/add'] = 'admin/product/add';
$routes['admin/product/insert_product'] = 'admin/product/insert_product';
$routes['admin/product/update/'.$id] = 'admin/product/update/'.$id;
$routes['admin/product/update'] = 'admin/product/update';
$routes['admin/product/update_Product/'] = 'admin/product/update_Product/';
$routes['admin/product/xoa'] = 'admin/product/delete';
// $routes['admin/product/update_Product/'.$id] = 'admin/product/update_Product/'.$id;
// $routes['admin/product/delete_Product/'.$id] = 'admin/product/delete_Product/'.$id;

$routes['admin/customer'] = 'admin/customer/index';
$routes['admin/customer_search'] = 'admin/customer/search';
$routes['admin/customer/add'] = 'admin/customer/add';
$routes['admin/customer/insert_customer'] = 'admin/customer/insert_customer';
$routes['admin/customer/update'] = 'admin/customer/update';
$routes['admin/customer/update_Customer'] = 'admin/customer/update_Customer';
$routes['admin/customer/update/'.$id] = 'admin/customer/update/'.$id;
$routes['admin/customer/update_Customer/'.$id] = 'admin/customer/update_Customer/'.$id;
$routes['admin/customer/delete_Customer/'.$id] = 'admin/customer/delete_Customer/'.$id;
$routes['admin/customer/xoa'] = 'admin/customer/delete_Customer';

$routes['admin/user'] = 'admin/user/index';
$routes['admin/user_search'] = 'admin/user/search';
$routes['admin/user/add'] = 'admin/user/add';
$routes['admin/user/insert_user'] = 'admin/user/insert_user';
$routes['admin/user/update'] = 'admin/user/update';
$routes['admin/user/update/'.$id] = 'admin/user/update/'.$id;
$routes['admin/user/update_User/'.$id] = 'admin/user/update_User/'.$id;
$routes['admin/user/delete_User/'.$id] = 'admin/user/delete_User/'.$id;
$routes['admin/user/xoa'] = 'admin/user/delete_User';

$routes['admin/categoryblog'] = 'admin/categoryblog/index';
$routes['admin/categoryblog_search'] = 'admin/categoryblog/search';
$routes['admin/categoryblog/add'] = 'admin/categoryblog/add';
$routes['admin/categoryblog/insert_categoryblog'] = 'admin/categoryblog/insert_categoryblog';
$routes['admin/categoryblog/update'] = 'admin/categoryblog/update';
$routes['admin/categoryblog/update/'.$id] = 'admin/categoryblog/update/'.$id;
$routes['admin/categoryblog/update_categoryblog'] = 'admin/categoryblog/update_categoryblog';
$routes['admin/categoryblog/update_categoryblog/'.$id] = 'admin/categoryblog/update_categoryblog/'.$id;
$routes['admin/categoryblog/delete_catgoryblog'] = 'admin/categoryblog/delete_catgoryblog';
$routes['admin/categoryblog/delete_catgoryblog/'.$id] = 'admin/categoryblog/delete_catgoryblog/'.$id;

$routes['admin/blog'] = 'admin/blog/index';
$routes['admin/blog_search'] = 'admin/blog/search';
$routes['admin/blog/add'] = 'admin/blog/add';
$routes['admin/blog/themblog'] = 'admin/blog/insert_blog';
$routes['admin/blog/update'] = 'admin/blog/update';
$routes['admin/blog/update/'.$id] = 'admin/blog/update/'.$id;
$routes['admin/blog/update_blog'] = 'admin/blog/update_blog';
$routes['admin/blog/update_blog/'.$id] = 'admin/blog/update_blog/'.$id;
$routes['admin/blog/xoa'] = 'admin/blog/delete_blog';
$routes['admin/blog/delete_blog/'.$id] = 'admin/blog/delete_blog/'.$id;

$routes['admin/login'] = 'admin/login/index';
$routes['admin/login/login'] = 'admin/login/login';
$routes['admin/logout'] = 'admin/login/logout';

$routes['admin/profile/'.$id] = 'admin/user/profile/'.$id;
$routes['admin/profile/'.$id] = 'admin/user/profile/'.$id;

$routes['admin/profile/updatepro'] = 'admin/user/updateprofile';
// $routes['admin/profile/updateprofile/'.$id] = 'admin/user/updateprofile/'.$id;
$routes['admin/profile/changepass/'.$id] = 'admin/user/changepass/'.$id;
$routes['admin/profile/changepass/'.$id] = 'admin/user/changepass/'.$id;
$routes['admin/profile/up_changepass'] = 'admin/user/up_changepass';
$routes['admin/profile/up_changepass/'.$id] = 'admin/user/up_changepass/'.$id;    

$routes['admin/cart'] = 'admin/cart/index';
$routes['admin/cart/update/'.$id] = 'admin/cart/update/'.$id;
$routes['admin/cart/update_cart/'.$id] = 'admin/cart/update_cart/'.$id;
$routes['admin/cart/xoa'] = 'admin/cart/delete';


?>
