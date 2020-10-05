<?php
session_start();
require_once('model/class/Manager.php');
if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}
// Manager::showError($_SESSION['client']);
if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action == 'home') {
        include_once('view/home_view.php');
    } elseif ($action == 'activite') {
        include_once('view/activite_view.php');
    } elseif ($action == 'actualite') {
        include_once('view/actualite_view.php');
    } elseif ($action == 'objectif') {
        include_once('view/objectif_view.php');
    } elseif ($action == 'AvecQuifaisons') {
        include_once('view/AvecQuifaisons_view.php');
    } elseif ($action == 'faisons') {
        include_once('view/faisons_view.php');
    } elseif ($action == 'vocation') {
        include_once('view/vocation_view.php');
    } elseif ($action == 'prod') {
        include_once('view/prod_view.php');
    } elseif ($action == 'produit') {
        include_once('view/produit_view.php');
    } elseif ($action == 'detail') {
        if (!empty($_POST)) {
            $data = $_POST;
            if (empty($_SESSION['client'])) {
                $client = Manager::getData('client', 'numero_telephone', $data['numero_telephone'])['data'] ?? null;
                // die($data['numero_telephone']);
                // Manager::showError($client);
            if (is_array($client) || is_object($client)) {
                unset($data['nom']);
                unset($data['numero_telephone']);
                $data['client'] = $client['id_client'];
                $_SESSION['client'] = $client;
                $manager = new Manager();
                $res = $manager->insert($data, 'commentaire');
                $_SESSION['messages']['msg'] = $res['message'];
                $_SESSION['messages']['code'] = $res['code'];
            } else {
                $mClient['nom'] = $data['nom'];
                $mClient['numero_telephone'] = $data['numero_telephone'];
                $mClient['src_img'] = Manager::createAvatarImage($data['nom']);
                $manager = new Manager();
                $res = $manager->insert($mClient, 'client');
                if ($res['code'] == 1) {
                    unset($data['nom']);
                    unset($data['numero_telephone']);
                    $data['client'] = $res['lastId'];
                    $_SESSION['client'] = $mClient;
                    $_SESSION['client']['id_client'] = $res['lastId'];
                    $manager = new Manager();
                    $res = $manager->insert($data, 'commentaire');
                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                }else {
                    $_SESSION['messages']['msg'] = $res['message'];
                    $_SESSION['messages']['code'] = $res['code'];
                }
            }
            } else {
                $data['client'] = $_SESSION['client']['id_client'];
                
                $manager = new Manager();
                $res = $manager->insert($data, 'commentaire');
                $_SESSION['messages']['msg'] = $res['message'];
                $_SESSION['messages']['code'] = $res['code'];
            }
            
        }
        include_once('view/produit1_view.php');
    } elseif ($action == 'produit2') {
        include_once('view/produit2_view.php');
    } elseif ($action == 'logout') {
        include('view/logout.php');
    } elseif ($action == 'produit3') {
        include_once('view/produit3_view.php');
    } elseif ($action == 'produit4') {
        include_once('view/produit4_view.php');
    } elseif ($action == 'produit5') {
        include_once('view/produit5_view.php');
    } elseif ($action == 'produit6') {
        include_once('view/produit6_view.php');
    } elseif ($action == 'ntic') {
        include_once('view/ntic_view.php');
    } elseif ($action == 'autre') {
        include_once('view/autre_view.php');
    } elseif ($action == 'divers') {
        include_once('view/divers_view.php');
    } elseif ($action == 'presentation') {
        include_once('view/presentation_view.php');
    } elseif ($action == 'contact') {
        include_once('view/contact_view.php');
    } elseif ($action == 'partenaires') {
        include_once('view/partenaires_view.php');
    } elseif ($action == 'contact') {
        include_once('view/contact_view.php');
    }
} else {
    include_once('view/home_view.php');
}
