<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Routes for Admin 
$route['admission_admin/home'] = 'admin/admin/view';
$route['admission_admin'] = 'admin/admin/login';
$route['admission_admin/inbox'] = 'admin/admin/inbox';
$route['admission_admin/register_admin'] = 'admin/admin/register';
$route['admission_admin/profile'] = 'admin/admin/profile';
$route['admission_admin/chat_room'] = 'admin/admin/chat_room';
$route['admission_admin/message'] = 'admin/admin/message';
$route['admission_admin/recovery_password'] = 'admin/admin/rpassword';
$route['admission_admin/logout'] = 'admin/admin/logout';
//$route['admission_portal/login'] = 'admission/users/login';

// Routes for the Admission form
//$route['admission_portal/user/apply/print_form'] = 'admission/uform/pform';
$route['admission_portal/user/apply/print_form'] = 'admission/uform/pform_ugraduate';
$route['admission_portal/user/apply/pform_transfer'] = 'admission/uform/pform_transfer';
$route['admission_portal/user/apply/ugraduate'] = 'admission/uform/ugraduate';
$route['admission_portal/user/apply/transfer'] = 'admission/uform/transfer';
$route['admission_portal/user/apply'] = 'admission/uform/form';
$route['admission_portal/logout'] = 'admission/users/logout';
$route['admission_portal/user/form'] = 'admission/users/form';
$route['admission_portal/user/faqs'] = 'admission/users/faqs';
$route['admission_portal/user/message'] = 'admission/users/message';
$route['admission_portal/user/inbox'] = 'admission/users/inbox';
$route['admission_portal/user/message_details/(:any)'] = 'admission/users/message_details/$1';
$route['admission_portal/user/graduate'] = 'admission/users/graduate';
$route['admission_portal/user/transfer'] = 'admission/users/transfer';
$route['admission_portal/user/ugraduate'] = 'admission/users/ugraduate';
$route['admission_portal/user'] = 'admission/users/uhome';
$route['admission_portal/user/admission_news'] = 'admission/users/admission_news';
$route['admission_portal/user/admission_news/(:any)'] = 'admission/users/news_details/$1';
$route['admission_portal/user/profile'] = 'admission/users/profile';

// Routes for Admission Website
$route['default_controller'] = 'admission_main/pages/view';
$route['undergraduate'] = 'admission_main/pages/ugrad';
$route['transfer'] = 'admission_main/pages/trans';
//$route['transfer'] = 'admission_main/pages/contact';
$route['contact'] = 'admission_main/pages/contact';
$route['admission_news'] = 'admission_main/pages/news';
$route['admission_news/(:any)'] = 'admission_main/pages/news/$1';

// Routes for Admission Portal
$route['admission_portal'] = 'admission/users/register';
$route['admission_portal/login'] = 'admission/users/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

