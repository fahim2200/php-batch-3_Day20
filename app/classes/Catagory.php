<?php


namespace App\Classes;


trait Catagory
{
    public $a = 'BITM';
    public $b = 'BASIS';
    public function hello()
    {
        echo $this->a. ' ' .$this->b;
    }
}