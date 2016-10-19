<?php

// Config
require_once "configs/connect.php";
/*
// Model for articles
require_once 'models/ArticlesModel.php';*/

// MVC for user registration
require_once 'controllers/RegisterController.php';
require_once 'models/RegisterModel.php';
require_once 'views/RegisterView.php';

// MVC for user login
require_once 'controllers/LoginController.php';
require_once 'models/LoginModel.php';
require_once 'views/LoginView.php';

// MVC for home page
/*require_once 'controllers/HomeController.php';*/
/*require_once 'models/Model.php';*/
/*
// MVC for users
require_once 'controllers/UsersController.php';
require_once 'models/UsersModel.php';
require_once 'views/UsersView.php';

// Collection of Views and Controllers for the combined ArticlesUsers [AU]
require_once 'controllers/Controller.php';
require_once 'views/AUView.php';
*/

// MVC for Post
require_once 'controllers/PostController.php';
require_once 'models/PostsModel.php';
require_once 'views/admin/PostView.php';
// MVC for Drug
require_once 'controllers/DrugController.php';
require_once 'models/DrugsModel.php';
require_once 'views/admin/DrugView.php';

//MVC for Post Category
require_once 'models/PostCategoryModel.php';

require_once 'models/DrugsModel.php';
require_once 'models/Drug_cateModel.php';

require_once 'controllers/UserPageController.php';
require_once 'views/UserPageView.php';
// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);

?>