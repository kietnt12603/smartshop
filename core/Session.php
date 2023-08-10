<?php

class Session
{
    /*
     * data(key, value) =>set Session
     *data(key) => get Session
     * */

    static public function data($key='',$value=''){
       $sessionKey = self::isInvalid();
        if(!empty(($value))){
            if(!empty($key)){
                $_SESSION[$sessionKey][$key] = $value; //set Session
                return true;
            }
            return false;
        }else{
            if(empty($key)){
                if(isset($_SESSION[$sessionKey])){
                    return $_SESSION[$sessionKey];
                }
            }else{
                if(isset($_SESSION[$sessionKey][$key])){
                    return $_SESSION[$sessionKey][$key]; //get Session
                }
            }
        }

}
    /*
     * delete(key)=> Xoá session với key
     *delete()=> Xoá hết session
     * */

    static public function delete($key=''){
        $sessionKey = self::isInvalid();
        if(!empty($key)){
            if(isset($_SESSION[$sessionKey][$key])){
                unset($_SESSION[$sessionKey][$key]);
                return true;
            }
            return false;
        }else{
            unset($_SESSION[$sessionKey]);
            return true;
        }
        return false;
    }

    /*
     * set Fash Data => giống set session
     * get Fash Data => giống get session
     * */

    static public function flash($key='',$value=''){
        $dataFlash = self::data($key,$value);
        if(empty($value)){
            self::delete($key);
        }
        return $dataFlash;
    }


    static public function showError($message){
        $data = [
            'message'=>$message
        ];
        App::$app->loadError('exception',$data);
    }

    static function isInvalid(){
        global $config;
        if(!empty($config['session'])){
            $sessionConfig = $config['session'];
            if(!empty($sessionConfig['session_key'])){
                $session_key = $sessionConfig['session_key'];
                return $session_key;
            }else{
                self::showError('Thiếu Cấu Hình session_key. Vui lòng kiểm tra lại file: configs/session.php');
            }
        }else{
            self::showError('Thiếu Cấu Hình Session. Vui Lòng Kiểm Tra File configs/session.php');
            die();
        }
    }

}