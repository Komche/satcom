<?php
session_start();
require_once('controller/controlleur.php');
if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}
// Manager::showError($_SESSION);
if (isset($_SESSION['user-sat'])) {
    if (!empty($_GET['action'])) {
        extract($_GET);

        if ($action == 'home') {

            include('view/homeView.php');
        } elseif ($action == 'addUser') {
            if (empty($modif)) {
                if (!empty($_POST)) {
                    $data = $_POST;
                    $manager = new Manager();
                    $res = $manager->insert($data, 'utilisateur');

                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                }
            }

            include('view/addUserView.php');
        } elseif ($action == 'addProduct') {
            if (empty($modif)) {
                if (!empty($_POST)) {
                    $data = $_POST;
                    if (!empty($_FILES['src_img'])) {
                        $data['src_img'] = Manager::uploadProfilePicture($_FILES['src_img'])['data'];
                    }
                    $manager = new Manager();
                    $res = $manager->insert($data, 'produit');

                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                }
            }

            include('view/addProductView.php');
        } elseif ($action == 'addActivity') {
            if (empty($modif)) {
                if (!empty($_POST)) {
                    $data = $_POST;
                    // Manager::showError($_FILES);
                    if (!empty($_FILES['src_img'])) {
                        $data['src_img'] = Manager::uploadProfilePicture($_FILES['src_img'])['data'];
                    }
                    // die('hum');
                    $manager = new Manager();
                    $res = $manager->insert($data, 'activite');

                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                }
            }

            include('view/addActivityView.php');
        } elseif ($action == 'listUser') {
            

            include('view/listUserView.php');
        } elseif ($action == 'listProduct') {
            
            include('view/listProductView.php');
        } else {
            include('view/homeView.php');
        }
    }else {
        include('view/homeView.php');
    }
}elseif (isset($_GET['changePass'])) {
    if (!empty($_POST)) {
        $res = UserManager::activeUser($_POST);
        //print_r($_POST); die;
        if ($res != 1) {
            $_SESSION['messages']['msg'] = $res;
            $_SESSION['messages']['code'] = 0;
        } else {
            header('Location: index.php?login');
        }
    }
    require('view/loginView.php');
} elseif (isset($_GET['login'])) {
    if (!empty($_POST)) {

        $res = UserManager::connectUser($_POST);
        if ($res != 1) {
            $_SESSION['messages']['msg'] = $res;
            $_SESSION['messages']['code'] = 0;
        } else {
            header('Location: index.php?action=profile');
        }
    }
    require('view/loginView.php');
}
