<?php

session_start();

// the link includes all manadatory 'includes'
require_once 'configs/includes.php';

// Get URL and find out to what page we should be directing
$page = $_GET['page'];
/*// get show parameter when viewing single articles
$drug_id = $_GET['drugid'];
$post_id = $_GET['postid'];

// display single drug
if (!empty($drug_id)) {

    $postsModel = new PostsModel();
    $customersModel = new CustomersModel();
    $drugsModel = new DrugsModel();
    $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
    $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
    echo $view->output_drug_detail();

} else if (!empty($post_id)) {

    $postsModel = new PostsModel();
    $customersModel = new CustomersModel();
    $drugsModel = new DrugsModel();
    $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
    $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
    echo $view->output_post_detail();

} else*/ 
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

        case "search":
            $postsModel = new PostsModel();
            $customersModel = new CustomersModel();
            $drugsModel = new DrugsModel();
            $controller = new UserPageController($postsModel, $drugsModel, $customersModel);
            $view = new UserPageView( $controller, $postsModel, $drugsModel, $customersModel );
            echo $view->output_search();
            break;


    }
} else {
	// redirection to home in URL invalid
    header("Location: dashboard.php?page=home");
}

 ?>
