<?php

class Response
{
    public function redirect($uri=''){
        if(preg_match('~^(http|https)~is', $uri)){
            $url = $uri;
        }else{
            $url = _WEB_ROOT.'/'.$uri;
        }

        header("location: ".$url);
        exit;
    }

    public function redirect1($uri=''){
        if(preg_match('~^(http|https)~is', $uri)){
            $url = $uri;
        }else{
            $url = _WEB_ROOT.'/'.$uri;
        }
         // header('refresh:5; index.php');
        header('refresh:5;'.$url);
        exit;
    }

}