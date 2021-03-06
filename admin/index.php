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
                    header('Location:index.php?action=listUser');
                }
            } else {
                if (!empty($_POST)) {
                    $data = $_POST;
                    $manager = new Manager();
                    $res = $manager->updateData($data, 'utilisateur', 'id_utilisateur', $modif);
                    // Manager::showError($res);

                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                }
            }

            include('view/addUserView.php');
        } elseif ($action == 'addEquipe') {
            if (empty($modif)) {
                if (!empty($_POST)) {
                    $data = $_POST;
                    if (!empty($_FILES['src_img'])) {
                        $data['src_img'] = Manager::uploadProfilePicture($_FILES['src_img'])['data'];
                    }
                    $manager = new Manager();
                    $res = $manager->insert($data, 'equipe');
                    // Manager::showError($res);

                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                    header('Location:index.php?action=listEquipe');
                }
            } else {
                if (!empty($_POST)) {
                    $data = $_POST;
                    if (!empty($_FILES['src_img']['name'])) {
                        $data['src_img'] = Manager::uploadProfilePicture($_FILES['src_img'])['data'];
                    } else {
                        unset($data['src_img']);
                    }
                    $manager = new Manager();
                    $res = $manager->updateData($data, 'equipe', 'id_equipe', $modif);
                    // Manager::showError($res);

                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                }
            }

            include('view/addEquipeView.php');
        } elseif ($action == 'product') {
            if (!empty($_POST)) {
                $data = $_POST;

                $manager = new Manager();
                $res = $manager->insert($data, 'commentaire');
                $_SESSION['messages']['msg'] = $res['message'];
                $_SESSION['messages']['code'] = $res['code'];
            }
            include_once('view/commentProductView.php');
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
            } else {
                if (!empty($_POST)) {
                    $data = $_POST;
                    if (!empty($_FILES['src_img']['name'])) {
                        $data['src_img'] = Manager::uploadProfilePicture($_FILES['src_img'])['data'];
                    } else {
                        unset($data['src_img']);
                    }
                    $manager = new Manager();
                    $res = $manager->updateData($data, 'produit', 'id_produit', $modif);

                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                    header('Location:index.php?action=listProduct');
                }
            }

            include('view/addProductView.php');
        } elseif ($action == 'vendre') {
            if (empty($modif)) {
                if (!empty($_POST)) {
                    $data = $_POST;
                    if ($data['max'] < $data['quantite']) {
                        $_SESSION['messages']['msg'] = "Quantite de vente supérieur au produit en stock";
                        $_SESSION['messages']['code'] = 0;
                    }else {
                        unset($data['max']);
                        $manager = new Manager();
                        $res = $manager->insert($data, 'vente');
                        if ($res['code']==1) {
                            $sql = "UPDATE produit SET quantite= quantite-? WHERE id_produit=?";
                            Manager::modifRecord($sql, [$data['quantite'], $data['produit']]);
                        }
                        $_SESSION['messages']['msg'] = $res['message'];
                        $_SESSION['messages']['code'] = $res['code'];
                    }
                }
            } else {
                if (!empty($_POST)) {
                    $data = $_POST;
                    if (!empty($_FILES['src_img']['name'])) {
                        $data['src_img'] = Manager::uploadProfilePicture($_FILES['src_img'])['data'];
                    } else {
                        unset($data['src_img']);
                    }
                    $manager = new Manager();
                    $res = $manager->updateData($data, 'produit', 'id_produit', $modif);

                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                    header('Location:index.php?action=listProduct');
                }
            }

            include('view/venteView.php');
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
        }elseif ($action == 'addSliders') { //View Sliders
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'un Sliders
                if (!empty($_POST)) {
                    $data = $_POST;
                    $res = Manager::updateData($data, 'post', 'id_post', $_GET['modif']);
                    if ($res['code'] = 200) {
                        header('Location: index.php?action=lstSliders');
                    }
                }
            } else { // Ajout Sliders
               
                if ( !empty($_FILES)) {
                    $data = $_POST;
                    $data['img1'] = uploadFile($_FILES['img1']);
                    $data['img2'] = uploadFile($_FILES['img2']);
                    $data['img3'] = uploadFile($_FILES['img3']);
                    
                    $manager = new Manager();
                    $res = $manager->insert($data, 'slider');
                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                }
            }
            require_once("view/addSlidersView.php");
        } elseif ($action == 'listUser') {
            include('view/listUserView.php');
        } elseif ($action == 'listEquipe') {
            include('view/listEquipeView.php');
        } elseif ($action == 'listProduct') {
            include('view/listProductView.php');
        } elseif ($action == 'listActivity') {
            include('view/listActivityView.php');
        } elseif ($action == 'dashboard') {
            include('view/dashboardView.php');
        } elseif ($action == 'logout') {
            include('view/logout.php');
        } else {
            include('view/dashboardView.php');
        }
    } else {
        include('view/dashboardView.php');
    }
} elseif (isset($_GET['changePass'])) {
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
} else {
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
