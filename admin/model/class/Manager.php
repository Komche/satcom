<?php
// require("api/model/Managers.php");
class Manager
{

    protected $last_name;
    protected $first_name;
    protected $email;
    protected $phone_number;
    private static $results = [];

    public static function bdd()
    {
        $dbname = 'c1485149c_satcom';
        $user = 'c1485149c_satcom';
        $pass = '@damoukomche2019';
        $host = 'localhost';
        if ($_SERVER["SERVER_NAME"] == 'localhost') {
            $dbname = 'satcom';
            $user = 'root';
            $pass = '';
            $host = 'localhost';
        }
        try {
            $pdo_options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true
            );
            $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$user", "$pass", $pdo_options);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
        return $bdd;
    }

    public static function getSingleRecords($sql, $params = null)
    {
        $req = self::bdd()->prepare($sql);
        if (!empty($params)) { // parameters must exist before you call bind_param() method
            $req->execute($params);
        } else {
            $req->execute();
        }


        if ($res = $req->fetch(PDO::FETCH_ASSOC)) {
            return $res;
        }
    }

    public static function getMultiplesRecords($sql, $params = [])
    {
        $req = self::bdd()->prepare($sql);
        if (!empty($params)) { // parameters must exist before you call bind_param() method
            $req->execute($params);
        } else {
            $req->execute($params);
        }
        if ($res = $req->fetchAll(PDO::FETCH_ASSOC)) {
            return $res;
        }
    }




    /* public static function getDatas($table_name, $field = null, $value = null)
    {
        if ($field != null && $value != null) {
            $sql = "SELECT * FROM $table WHERE $field=?";
            return self::getMultipleRecords($sql, [$value]);
        } else {
            $url = API_ROOT_PATH . "/$table";
            $data = self::file_get_data($url);
            if ($data['error']) {
                return $data['message'];
            } else {
                return $data['data'];
            }
        }
    }*/

    /**
     * get data format json
     * 
     * @return json_encode($result)
     */
    public static function getData($table, $property = null, $val = null, $many = false)
    {
        $query = "SELECT * FROM $table ";
        if ($property != null && $val != null) {
            if ($val === 'last') {
                self::lastID($table, $property);
            } elseif ($val === 'distinct') {
                self::distinct($table, $property);
            } elseif ($val === 'exist') {
                echo self::is_not_use($table, $property, $_GET['val']);
            } elseif ($many) {
                $query .= "WHERE $property=:$property";

                $req = self::bdd()->prepare($query);

                $req->execute([$property => $val]);
                if (self::$results['data'] = $req->fetchAll(PDO::FETCH_ASSOC)) {
                    return self::$results;
                } else {
                    return self::throwError(0, "Une erreur s'est produite ou enregistrement non trouvé", true)['message'];
                }
            } elseif (!empty($_GET['prop']) && !empty($_GET['val'])) {
                extract($_GET);
                $query .= "WHERE $property=:$property AND $prop=:$prop";

                $req = self::bdd()->prepare($query);

                $req->execute([$property => $val, $prop => $val]);
                if (self::$results['data'] = $req->fetchAll(PDO::FETCH_ASSOC)) {
                    return self::$results;
                } else {
                    return self::throwError(0, "Une erreur s'est produite ou enregistrement non trouvé", true)['message'];
                }
            } else {
                $query .= "WHERE $property=:$property";
                
                $req = self::bdd()->prepare($query);
                $req->execute([$property => $val]);
                if (self::$results['data'] = $req->fetch(PDO::FETCH_ASSOC)) {
                    self::$results['code'] = 1;
                    return self::$results;
                } else {
                    return self::throwError(0, "Une erreur s'est produite ou enregistrement non trouvé", true)['message'];
                }
            }
        } else {

            $req = self::bdd()->query($query);
            if (self::$results['data'] = $req->fetchAll(PDO::FETCH_ASSOC)) {
                return self::$results;
            } else {
                echo self::throwError(0, "Une erreur s'est produite ou enregistrement non trouvé", true)['message'];
            }
        }
    }

    public static function addoNTable($url, $data)
    {
        $res = self::verif($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
        return $res;
    }

    public static function  file_post_contents($url, $data)
    {

        $postdata = http_build_query($data);

        $opts = array(
            'http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        //print_r($opts); die($url);
        // if ($username && $password_) {
        //     $opts['http']['header'] = ("Authorization: Basic " . base64_encode("$username:$password_"));
        // }

        $context = stream_context_create($opts);
        return file_get_contents($url, false, $context);
    }

    public static function  file_put_contents($url, $data)
    {


        $postdata = json_encode($data);

        $opts = array(
            'http' =>
            array(
                'method'  => 'PUT',
                'header'  => 'Content-type: application/json',
                'content' => $postdata
            )
        );
        //print_r($opts); die($url);
        // if ($username && $password_) {
        //     $opts['http']['header'] = ("Authorization: Basic " . base64_encode("$username:$password_"));
        // }

        $context = stream_context_create($opts);
        return file_get_contents($url, false, $context);
    }
    public static function correct($res)
    {
        $res = json_decode($res);
        $res = (array) $res;
        return $res;
    }

    public static function verif($data)
    {
        if (!is_array($data)) {
            return 'Une erreur s\'est produite';
        }

        $res = self::is_not_empty($data);
        if ($res != 1) {
            $res['message'] = $res;
            return $res;
        }
        /* $res = array();
        foreach ($data as $key => $value) {
            if (is_numeric($value)) {
                $res['message'] = "$key doit être écrit avec du text";
                return $res;
            }

            if (strlen($value) < 3 && !is_int($value)) {
                $res['message'] = 'Votre texte est trop cours';
                return $res;
            }
        } */

        return 1;
    }

    public static function messages($msg, $code)
    {
        $type_alerte = 'alert-danger';
	$icon_alert = 'fa-ban';
        if ($code == 1) {$type_alerte = 'alert-success'; $icon_alert='fa-check';};

        echo  '<div class="alert ' . $type_alerte . ' alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa '.$icon_alert.'"></i> SATCOM!</h4>
        ' . $msg . '
      </div>';
    }

    public static function showError($var)
    {
        die(var_dump($var));
    }



    /**
     * check if fields is empty
     * 
     * @param array $fields
     * @return boolean
     */
    public static function is_not_empty($fields = [], $table_name = null)
    {
        if (!empty($table_name)) {
            $tField = self::getFields($table_name);
            if (count($fields) != 0 && count($tField) != 0) {
                foreach ($fields as $key => $field) {
                    if ($tField[$key] == "NO" and $tField[$key] == $fields['$key']) {
                        if (empty($field) && trim($field) == "") {
                            self::throwError(0, "$key est vide");
                            return false;
                        }
                    }
                }
                return true;
            }
        } else {
            if (count($fields) != 0) {
                foreach ($fields as $key => $field) {
                    if (empty($field) && trim($field) == "") {
                        self::throwError(0, "$key est vide");
                        return false;
                    }
                }
                return true;
            }
        }
    }

    public static function getFields($table)
    {

        $sql = "DESCRIBE $table";
        $req = self::bdd()->query($sql);
        while ($res = $req->fetch()) {
            $data[$res['Field']] = $res['Null'];
        }
        return $data;
    }
    /**
     * get the last id of table
     * 
     * @param mixed $table
     * @param mixed $field
     * @return array
     */
    public static function lastID($table, $fields)
    {
        $sql = "SELECT $fields FROM $table ORDER BY $fields DESC LIMIT 1;";
        $req = self::bdd()->query($sql);

        if (self::$results['data'] = $req->fetch(PDO::FETCH_ASSOC)) {
            return self::$results['lastId'];
        }
    }

    /**
     * get the last id of table
     * 
     * @param mixed $table
     * @param mixed $field
     * @return array
     */
    public function distinct($table, $fields)
    {
        $sql = "SELECT DISTINCT $fields FROM $table ORDER BY $fields DESC;";
        $req = $this->db->query($sql);

        if (self::$results['data'] = $req->fetchAll(PDO::FETCH_ASSOC)) {
            echo json_encode(self::$results);
        }
    }

    /**
     * check if row exist in a table
     * 
     * @param mixed $table
     * @param mixed $field
     * @param mixed $value
     * @return boolean
     */
    public function is_not_use($table, $field, $value)
    {
        $sql = "SELECT * FROM $table WHERE $field=:value";

        $req = $this->db->prepare($sql);
        $req->execute(array('value' => $value));
        if ($req->fetch()) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * error manager
     * 
     * @param int|null $code
     * @param mixed $message
     * @param boolean|false $is_error
     * @return json_encode($result)
     */
    public static function throwError($code = null, $message, $is_error = false, $lastId = null)
    {
        if (array_key_exists('data', self::$results))
            unset(self::$results['data']);
        self::$results['error'] = $is_error;
        self::$results['message'] = $message;
        self::$results['lastId'] = $lastId;
        self::$results['code'] = $code;
        return  self::$results;
    }

    public static function print_var_name($variable)
    {
        foreach ($GLOBALS as $var_name => $var_value) {
            if ($var_value == $variable) {
                return $var_name;
            }
        }

        return false;
    }

    public static function get_properties_name($object, $property)
    {
        $properties = get_object_vars($object);
        $keys = array_keys($properties);
        //print_r($properties); die;
        foreach ($properties as $var_name => $var_value) {
            if ($var_name == $property) {
                return $var_value;
            }
        }

        return false;
    }

    public  function insert($table, $table_name)
    {
    //    var_dump($table); die($table_name);
        if (is_array($table) || is_object($table)) {
            if (count($table) > 0) {
                end($table);
                $last = key($table);
                $sql = "INSERT INTO $table_name(";
                foreach ($table as $key => $field) {
                    if ($last != $key) {
                        $sql .= $key . ", ";
                    } else {
                        $sql .= $key . ") ";
                    }
                }
                $sql .= "VALUES(";
                foreach ($table as $key => $field) {
                    if ($last != $key) {
                        $sql .= ":$key, ";
                    } else {
                        $sql .= ":$key)";
                    }
                }
    
                $req = self::bdd()->prepare($sql);
                //if ($this->is_not_empty($table)) {
                    try {
                        $req->execute($table);
                        $lastId = self::bdd()->lastInsertId();
                        return $this->throwError(1, "Enregistrement effectué avec succès", false, $lastId);
                    } catch (PDOException $e) {
                        return $this->throwError(0, "Enregistrement échoué; $e", true);
                    }
                // } else {
                //     return $this->throwError(0, "Un ou plusieurs champs mal renseigner", true);
                // }
            }
        }
    }
    
    public static function modifRecord($sql, $params)
    {
        $req = self::bdd()->prepare($sql);
        $res = $req->execute($params);
        return $res;
    }
    /**
     * update data
     * 
     * @return void
     */
    public static function update($object)
    {
        if (!function_exists('array_key_first')) {
            function array_key_first(array $arr)
            {
                foreach ($arr as $key => $unused) {
                    return $key;
                }
                return NULL;
            }
        }
        // recupération de propriété de nom de l'objet
        $table = get_object_vars($object);
        $table_name = strtolower(get_class($object));

        // on enlève la propriété dont la valeur est null
        foreach ($table as $key => $value) {
            if ($table[$key] == null) {
                unset($table[$key]);
            }
        }

        //on recupère le id de la table
        $id = array_key_first($table);

        // realisation de la requête
        if (count($table) > 0) {
            $temp  = array_keys($table);
            $last_key = end($temp);
            $sql = "UPDATE $table_name SET ";
            foreach ($table as $key => $field) {

                if ($last_key != $key) {
                    $sql .= "$key=:$key, ";
                } else {
                    $sql .= "$key=:$key ";
                }
            }
            $sql .= "WHERE $id=:$id";

            $req = self::bdd()->prepare($sql);
            if ($req->execute($table)) {
                self::throwError(200, "Enregistrement modifié avec succès");
            } else {
                self::throwError(503, "modification échouée", true);
            }
        }
    }
    /**
     * update data
     * 
     * @return void
     */
    public static function updateData($value, $table, $property, $val)
    {

        if (count($value) > 0) {
            $temp  = array_keys($value);
            $last_key = end($temp);
            $sql = "UPDATE $table SET ";
            foreach ($value as $key => $field) {
                if ($last_key != $key) {
                    $sql .= "$key=:$key, ";
                } else {
                    $sql .= "$key=:$key ";
                }
            }
            $sql .= "WHERE $property=:$property";

            //s'il existe un champs password_ il sera crypter
            if (!array_key_exists($property, $value)) {
                $value[$property] = $val;
            }

            $req = self::bdd()->prepare($sql);
            if ($req->execute($value)) {
                return self::throwError(1, "Enregistrement modifié avec succès");
            } else {
                return self::throwError(0, "modification échouée", true);
            }
        }
    }

    public static function updateDataSingle($proprety, $value, $table, $property, $val)
    {
        $sql = "UPDATE $table SET $proprety=:$proprety WHERE $property=:$property";
        $req = self::bdd()->prepare($sql);
        if ($req->execute([$proprety=> $value, $property=>$val])) {
            self::throwError(200, "Enregistrement modifié avec succès");
        } else {
            self::throwError(503, "modification échouée", true);
        }
    }

    // upload's user profile profile picture and returns the name of the file
    public static function uploadProfilePicture($file)
    {
        //Manager::showError($file['profile_picture']);
        // if file was sent from signup form ...
        // die('ok');
        if (!empty($file) && !empty($file['name'])) {
            // Get image name
            $profile_picture = date("Y.m.d.H.i.s") . $file['name'];
            // define Where image will be stored
            $target = "public/img/" . $profile_picture;
            // die($target);
            // upload image to folder
            if (move_uploaded_file($file['tmp_name'], $target)) {
                
                $res['msg'] = "Enregistrement réussi";
                $res['data'] = $target;
                $res['code'] = 1;
                return $res;
            } else {
                $res['msg'] = 'Erreur lors de l\'jout de la photo';;
                $res['code'] = 0;
                $res['data'] = null;
                return $res;
            }
        }
    }
}
