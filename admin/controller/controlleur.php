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


