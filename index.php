<?php

session_start();

// the link includes all manadatory 'includes'
require_once 'configs/includes.php';

// display single drug
if (isset($_GET['drugid'])) {
    $drug_id = $_GET['drugid'];
    $postsModel = new PostsModel();
    $customersModel = new CustomersModel();
    $drugsModel = new DrugsModel();
    $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
    $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
    echo $view->output_drug_detail();

} else if (isset( $_GET['postid'])) {
    $post_id = $_GET['postid'];
    $postsModel = new PostsModel();
    $customersModel = new CustomersModel();
    $drugsModel = new DrugsModel();
    $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
    $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
    echo $view->output_post_detail();
} else if (isset($_GET['page'])){
    $page = $_GET['page'];
     // based on page create the relevant Model, View and Controller
     switch ($page) {
        case "home":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            echo $view->output_home();
            break;

        case "register":
            $model = new RegisterModel();
            $controller = new RegisterController($model);
            $view = new RegisterView($controller, $model);
			// if action is set, register user
            if ( isset($_GET['action']) ) {
                $controller->registerUser();
            }
            echo $view->output();
            break;

        case "login":
            $model = new LoginModel();
            $controller = new LoginController($model);
            $view = new LoginView($controller, $model);
			// if action is set, register user
            if ( isset($_GET["action"])) {
            	// if action is 'login', log user in
                if( $_GET["action"]=="login") {
                    $controller->login();
                } else { // if action is 'logout', log user out
                    $controller->logout();
                }
            }
            echo $view->output();
            break;
            
        case "search":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            echo $view->output_search();
            break;

        case "post":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            echo $view->output_list_post();
            break;

        case "product":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            echo $view->output_list_drug();
            break;

        case "user":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            $customerController = new CustomerController($customersModel);
            $action = $_GET['action'];
            if($action == "show"){
                $view->output_user_detail();
            } else if($action == "edit") {
                if(isset($_GET['status'])){
                    $customerController->editCustomer();
                }
                $view->output_user_edit();
            }
            break;

        case "introduce":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            $view->output_introduce();
            break;

        case "feedback":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            //for feedback
            $fbModel = new FeedbackModel();
            $fbController = new FeedbackController($fbModel);
            if(isset($_GET['status'])){
                $fbController->addFeedback();
            }
            $view->output_feedback();
            break;

        case "order":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            //for order
            $orderModel = new OrderModel();
            $orderController = new OrderController($orderModel);
            $action = $_GET['action'];
            if($action == "add"){
                if(isset($_GET['status'])){
                    $orderController->addOrder();
                }
                $view->output_order_add();
            } else if($action == "shipping") {
                $view->output_order_shipping();
            } else {
                $view->output_order_show();
            }
            break;  

        case "message":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            $action = $_GET['action'];
            if($action == "show" && empty($_GET['id'])){
                $view->output_list_message();
            } else if ($action == "show" && isset($_GET['id'])){
                $view->output_message_detail();
            }  else if ($action == "delete"){
                $view->output_message_delete();
            }   
            break;
    }
} else {
	// redirection to home in URL invalid
    header("Location: index.php?page=home");
}

 ?>
