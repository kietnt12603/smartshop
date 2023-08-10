<?php

class CustomerModel extends Model
{

    function tableFill()
    {
        return 'customer';
    }

    function fieldFill()
    {
        require '*';
    }

    function primaryKey()
    {
        return 'id';
    }
}