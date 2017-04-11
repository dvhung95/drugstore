<?php

session_start();

// the link includes all manadatory 'includes'
require_once 'configs/includes.php';
$page = $_GET['page'];
if (!empty($page)){
	
     // based on page create the relevant Model, View and Controller
     switch ($page) {
       /* case "home":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            echo $view->output_home();
            break;*/

        case "post":
            $pModel = new PostsModel();
            $pCategory = new PostCategoryModel();
            $controller = new PostController($pModel);
            $view = new PostView($controller, $pModel, $pCategory);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'add':
                    if (isset($_GET['status'])){
                        $controller->addPost();
                    } 
                    echo $view->output_add();
                    break;
                 case 'edit':
                    if (isset($_GET['status'])){
                        $controller->editPost();
                    } 
                    echo $view->output_edit();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

        case "drug":
            $drugModel = new drugsModel();
            $drugCategory = new Drug_cateModel();
            $controller = new DrugController($drugModel);
            $view = new DrugView($controller,  $drugModel , $drugCategory );
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'add':
                    if (isset($_GET['status'])){
                        $controller->addDrug();
                    } 
                    echo $view->output_add();
                    break;
                case 'edit':
                    if (isset($_GET['status'])){
                        $controller->editDrug();
                    } 
                    echo $view->output_edit();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

        case "drug_category":
            $drugCategory = new Drug_cateModel();
            $controller = new DrugCategoryController($drugCategory);
            $view = new DrugCategoryView($controller, $drugCategory);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'add':
                    if (isset($_GET['status'])){
                        $controller->addDrugCategory();
                    } 
                    echo $view->output_add();
                    break;
                case 'edit':
                    if (isset($_GET['status'])){
                        $controller->editDrugCategory();
                    } 
                    echo $view->output_edit();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

        case "customer":
            $customersModel = new CustomersModel();
            $controller = new CustomerController($customersModel);
            $view = new CustomerView($controller, $customersModel);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_admin_show();
                    break;
                case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

        case "drug_category":
            $drugCategory = new Drug_cateModel();
            $controller = new DrugCategoryController($drugCategory);
            $view = new DrugCategoryView($controller, $drugCategory);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'add':
                    if (isset($_GET['status'])){
                        $controller->addDrugCategory();
                    } 
                    echo $view->output_add();
                    break;
                case 'edit':
                    if (isset($_GET['status'])){
                        $controller->editDrugCategory();
                    } 
                    echo $view->output_edit();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

        case "post_category":
            $postCategory = new PostCategoryModel();
            $controller = new PostCategoryController($postCategory);
            $view = new PostCategoryView($controller, $postCategory);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'add':
                    if (isset($_GET['status'])){
                        $controller->addPostCategory();
                    } 
                    echo $view->output_add();
                    break;
                case 'edit':
                    if (isset($_GET['status'])){
                        $controller->editPostCategory();
                    } 
                    echo $view->output_edit();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

        case "admin":
            $adminModel = new AdministratorModel();
            $controller = new AdministratorController($adminModel);
            $view = new AdministratorView($controller, $adminModel);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'add':
                    if (isset($_GET['status'])){
                        $controller->addAdministrator();
                    } 
                    echo $view->output_add();
                    break;
                case 'edit':
                    if (isset($_GET['status'])){
                        $controller->editAdministrator();
                    } 
                    echo $view->output_edit();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                case 'check': 
                    echo $view->output_check();
                    break;
                default:
                    break;
            }
            break;

        case "feedback":
            $fbModel = new FeedbackModel();
            $controller = new FeedbackController($fbModel);
            $view = new FeedbackView($controller, $fbModel);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'replied':
                    echo $view->output_replied();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

        case "shipper":
            $model = new ShipperModel();
            $controller = new ShipperController($model);
            $view = new ShipperView($controller,  $model);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'add':
                    if (isset($_GET['status'])){
                        $controller->addShipper();
                    } 
                    echo $view->output_add();
                    break;
                case 'edit':
                    if (isset($_GET['status'])){
                        $controller->editShipper();
                    } 
                    echo $view->output_edit();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

        case "shippingprice":
            $shippingpriceModel = new ShippingPriceModel();
            $controller = new ShippingPriceController($shippingpriceModel);
            $view = new ShippingPriceView($controller, $shippingpriceModel);
            $action = $_GET['action'];
            switch ($action) {
                case 'show':
                    echo $view->output_show();
                    break;
                case 'add':
                    if (isset($_GET['status'])){
                        $controller->addShippingPrice();
                    } 
                    echo $view->output_add();
                    break;
                case 'edit':
                    if (isset($_GET['status'])){
                        $controller->editShippingPrice();
                    } 
                    echo $view->output_edit();
                    break;
                 case 'delete':
                    echo $view->output_delete();
                    break;
                default:
                    break;
            }
            break;

            case "message":
                $mModel = new MessageModel();
                $controller = new MessageController($mModel);
                $view = new MessageView($controller, $mModel);
                $action = $_GET['action'];
                switch ($action) {
                    case 'show':
                        echo $view->output_show();
                        break;
                    case 'add':
                        if (isset($_GET['status'])){
                            $controller->addMessage();
                        } 
                        echo $view->output_add();
                        break;
                    case 'delete':
                        echo $view->output_delete();
                        break;
                    default:
                        break;
                }
                break;

            case "order":
                $model = new OrderModel();
                $controller = new OrderController($model);
                $view = new OrderView($controller, $model);
                $action = $_GET['action'];
                switch ($action) {
                    case 'show':
                        echo $view->output_show();
                        break;
                    case 'edit':
                        if (isset($_GET['status'])){
                            $controller->editOrder();
                        } 
                        echo $view->output_edit();
                        break;
                    case 'delete':
                        echo $view->output_delete();
                        break;
                    default:
                        break;
                }
                break;


    }
} else {
	// redirection to home in URL invalid
    header("Location: dashboard.php?page=home");
}

 ?>
