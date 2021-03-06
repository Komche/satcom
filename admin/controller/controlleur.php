<?php
include_once('model/class/UserManager.php');
include_once('model/class/Manager.php');
include_once('model/class/Files.php');


function setActionUrl($name)
{
    $name = str_replace(' ', '_', $name);
    return $name;
}

function getModules()
{
    $res = Manager::getData('module_role', 'role_id', $_SESSION['user-base']['roleId']);
    $_SESSION['user-base']['roles']['modules'] = $res;
    $sql ="select action_url from module where sub_module=?";
    $res = Manager::getMultiplesRecords($sql, [$res['data']['module']]);
    $_SESSION['user-base']['roles']['modules_action'] = $res;
}

function getActions($moduleId)
{
   $res = array();
   // Manager::showError($module)
   $sql = "SELECT * FROM module WHERE sub_module=?";
       $res = Manager::getMultiplesRecords($sql, [$moduleId]);
   return $res;
}

function haveAction($role, $module)
{
   $res = array();
   // Manager::showError($module)
   $sql = "SELECT * FROM module_role WHERE role_id=? AND module=?";
   $res = Manager::getMultiplesRecords($sql, [$role, $module]);
   if ((is_array($res) || is_object($res)) && count($res)>0) {
       return true;
   }else {
       return false;
   }
   
}

function handleMatricule($mat)
{
    $lentgh = strlen($mat);
    switch ($lentgh) {
        case 7:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key+1<7) {
                    $res .= $temp[$key+1];
                }
            }
            return $res;
            break;
        case 8:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+2];
                }elseif($key>=2) {
                    if ($key+1<8) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 9:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+3];
                }elseif($key>=3) {
                    if ($key+1<9) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 10:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+4];
                }elseif($key>=4) {
                    if ($key+1<10) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 11:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+5];
                }elseif($key>=5) {
                    if ($key+1<11) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        
        default:
            return $mat;
            break;
    }
}

function getMatricule()
{
    $sql = "SELECT Max(id_membre) +1 nb FROM membre";
    $res = Manager::getSingleRecords($sql);
    // Manager::showError($res);
    try {
        return handleMatricule("00000".$res['nb'])."/AEMN/".date("yy");
    } catch (\Throwable $th) {
        return "000001/AEMN/".date("yy");
    }

}

function getEtat($etat)
{
    if ($etat=="1") {
        return 'disponible';
    }elseif ($etat=="0") {
        return 'stock faible';
    }elseif ($etat=="-1") {
        return 'non disponible';
    }
}
function getEtatClass($etat)
{
    if ($etat=="1") {
        return 'text-success';
    }elseif ($etat=="0") {
        return 'text-warning';
    }elseif ($etat=="-1") {
        return 'text-danger';
    }
}


//https://phppot.com/php/how-to-generate-initial-avatar-image-from-username-using-php-dynamically/
function createAvatarImage($string)
{
 
    $imageFilePath = "public/img/".str_replace(' ','_',$string) . ".png";

    //base avatar image that we use to center our text string on top of it.
    $avatar = imagecreatetruecolor(60,60);
    $bg_color = imagecolorallocate($avatar, 211, 211, 211);
    imagefill($avatar,0,0,$bg_color);
    $avatar_text_color = imagecolorallocate($avatar, 0, 0, 0);
	// Load the gd font and write 
    $font = imageloadfont('public/gd-font.gdf');
    imagestring($avatar, $font, 10, 10, $string, $avatar_text_color);
    imagepng($avatar, $imageFilePath);
    imagedestroy($avatar);
 
    return $imageFilePath;
}

function uploadFile($file)
{
    if (!empty($file) && !empty($file['name'])) {

        // Get image name
        $src = date("Y.m.d.H.i.s") . $file['name'];
        // define Where image will be stored
        $target = "public/img/slider" . $src;
        // upload image to folder
        //Manager::showError($file);
        if (move_uploaded_file($file['tmp_name'], $target)) {
            return $target;
        } else return 0;
    }
}