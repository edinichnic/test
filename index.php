<?php
// setting cookie
// setcookie("userID", "4");

// including classes
require_once 'application/PageController.php';
require_once 'application/UserModel.php';

try {
//    //cookies checking
//    $userID = '';
    if (isset($_COOKIE["userID"]))
        $userID = $_COOKIE["userID"];
//
//    //action checking
//    $action = '';
//    if (isset($_GET['action']))
//        $action = $_GET['action'];


    switch($action) {
        case 'changefallow':
            $pageCtrl->actionChangeFollow($userID);
            break;
//        case 'login':
//            $pageCtrl->login();
//            break;
        default:
            $pageCtrl->actionIndex($userID);
            break;
    }

//    // page handling
//    $page = new PageController($userID, $action);
//    $page->exec();

} catch (Exception $e) {
    // error script...
}