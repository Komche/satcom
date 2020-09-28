<?php
require_once("Manager.php");
require_once("model/global.php");

class UserManager  extends Manager
{

    public static function addModule($url, $data)
    {
        $res = self::verif($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
    }

    private static function verifUser($data)
    {
        if (!is_array($data)) {
            return 'Une erreur s\'est produite';
        }

       
        if (!self::is_not_empty($data)) {
            return "Un des champs pas renseigner";
        }

        if (strlen($data['mot_passe']) < 6) {
            return "Le mot de passe est très court, au moins 6 caractère sont requis";
        }

        if (trim($data['mot_passe']) !== trim($data['mot_passe_2'])) {
            return "Les mot de passe ne correspondent pas, veuillez verifier";
        }

        return 1;
    }

    public static function activeUser($data)
    {
        $res = self::verifUser($data);

        if ($res != 1) {
            return $res;
        }
        $res = self::getData('utilisateur', 'numero_telephone', $data['numero_telephone']);
        if ($res['code'] == 0) {
            return "Ce numéro n'existe pas dans notre base de donnée";
        }

        unset($data['mot_passe_2']);
        $data['update_at'] = date('Y-m-d h:i:s', time());;
        $data['status'] = 1;
        $data['mot_passe']= password_hash($data['mot_passe'], PASSWORD_BCRYPT);
        $res = self::updateData($data, 'utilisateur', 'numero_telephone', $data['numero_telephone']);
        
        if ($res['code']=0) {
            return $res['message'];
        }

        return 1;
    }

    public static function connectUser($data)
    {
        $res = self::is_not_empty($data);
        // Manager::showError($data);
        if (!$res) {
            return "Un des champs est vide";
        }

        $res = self::getData('utilisateur', 'numero_telephone', $data['numero_telephone']);
        if ($res['code']==0 || is_string($res) ) {
            return 'N° de téléphone ou mot de passe incorrecte';
        } else {

            $res = $res['data'];
            if (password_verify($data['mot_passe'], $res['mot_passe'])) {
                $_SESSION['user-sat']['id_utilisateur'] = $res['id_utilisateur'];
                $_SESSION['user-sat']['nom'] = $res['nom'];
                $_SESSION['user-sat']['prenom'] = $res['prenom'];
                $_SESSION['user-sat']['email'] = $res['email'];
               
                // $_SESSION['user-sat']['photo'] = self::getData('files', 'id', $res['photo'])['data']['file_url'];
                return 1;
            } else {
                return 'N° de téléphone ou mot de passe incorrecte';
            }
            // return $res['data'];
        }
    }
    public static function connectUserMobile($data)
    {
        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::getData('users', 'phone_number', $data['phone_number']);
        // die(print_r($res));
        if (!empty($res['error']) || is_string($res)) {
            return 'N° de téléphone incorrecte';
        } else {

            $res = $res['data'];
            $_SESSION['user-sat']['id'] = $res['id'];
            $_SESSION['user-sat']['first_name'] = $res['first_name'];
            $_SESSION['user-sat']['last_name'] = $res['last_name'];
            $_SESSION['user-sat']['matricule'] = $res['matricule'];
            $_SESSION['user-sat']['phone_number'] = $res['phone_number'];
            $_SESSION['user-sat']['role'] = self::getData('roles', 'id', $res['role'])['data']['name'];
            $_SESSION['user-sat']['roleId'] = self::getData('roles', 'id', $res['role'])['data']['id'];
            $_SESSION['user-sat']['type_agent'] = self::getData('type_agent', 'id', $res['type_agent'])['data']['label'];
            $_SESSION['user-sat']['photo'] = self::getData('files', 'id', $res['photo'])['data']['file_url'];
            return 1;
        }
    }

    

    public static function addUser($data)
    {
        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        $data['photo'] = self::uploadProfilePicture($data['profile_picture']);
        $data['photo'] = intval($data['photo']);
        if (!is_int($data['photo']) && $data['photo'] == 0) {
            return $data['photo'];
        }

        unset($data['profile_picture']);
        // $url = API_ROOT_PATH . "/users";
        // $res = self::addoNTable($url, $data);
        //Manager::showError($data);
        $res = self::correct($res);
        if ($res['error']) {
            return $res;
        }

        return 1;
    }
}
