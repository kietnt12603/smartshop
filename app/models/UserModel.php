<?php

class UserModel extends Model
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
        return 'id';
    }
}