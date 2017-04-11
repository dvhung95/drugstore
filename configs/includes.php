<?php

// Config
require_once "configs/connect.php";

// MVC for user registration
require_once 'controllers/RegisterController.php';
require_once 'models/RegisterModel.php';
require_once 'views/RegisterView.php';

// MVC for user login
require_once 'controllers/LoginController.php';
require_once 'models/LoginModel.php';
require_once 'views/LoginView.php';

// MVC for Post
require_once 'controllers/PostController.php';
require_once 'models/PostsModel.php';
require_once 'views/admin/PostView.php';

//MVC for Post Category
require_once 'controllers/PostCategoryController.php';
require_once 'models/PostCategoryModel.php';
require_once 'views/admin/PostCategoryView.php';

// MVC for Drug
require_once 'controllers/DrugController.php';
require_once 'models/DrugsModel.php';
require_once 'views/admin/DrugView.php';

//MVC for Drug Category
require_once 'controllers/DrugCategoryController.php';
require_once 'models/Drug_cateModel.php';
require_once 'views/admin/DrugCategoryView.php';

//MVC for Customer
require_once 'controllers/CustomerController.php';
require_once 'models/CustomersModel.php';
require_once 'views/admin/CustomerView.php';

//MVC for Administrator
require_once 'controllers/AdministratorController.php';
require_once 'models/AdministratorModel.php';
require_once 'views/admin/AdministratorView.php';

//MVC for feedback
require_once 'controllers/FeedbackController.php';
require_once 'models/FeedbackModel.php';
require_once 'views/admin/FeedbackView.php';

//MVC for shipper
require_once 'controllers/ShipperController.php';
require_once 'models/ShipperModel.php';
require_once 'views/admin/ShipperView.php';

//MVC for ShippingPrice
require_once 'controllers/ShippingPriceController.php';
require_once 'models/ShippingPriceModel.php';
require_once 'views/admin/ShippingPriceView.php';

//MVC for Order
require_once 'controllers/OrderController.php';
require_once 'models/OrderModel.php';

//MVC for message
require_once 'controllers/MessageController.php';
require_once 'models/MessageModel.php';
require_once 'views/admin/MessageView.php';

//MVC for order
require_once 'controllers/OrderController.php';
require_once 'models/OrderModel.php';
require_once 'views/admin/OrderView.php';

//MVC for User Page View
require_once 'controllers/UserPageController.php';
require_once 'views/UserPageView.php';
// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
?>