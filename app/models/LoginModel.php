<?php

class LoginModel extends Model
{

    function tableFill()
    {
        return 'user';
    }

    function fieldFill()
    {
        return '*';
    }

    function primaryKey()
    {
        return 'user, password';
    }

    function getLogin($user,$pass){

    }

}