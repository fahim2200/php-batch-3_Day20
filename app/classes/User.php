<?php


namespace App\Classes;


class User
{
    protected  $name = 'BITM';
    protected $city  =  'Dhaka';


    public function index()
    {
        echo 'Institute name is ' .$this->name. ' and city is '.$this->city;
    }

}