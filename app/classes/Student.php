<?php


namespace App\Classes;
use App\Classes\User;
use App\Classes\Example1;
use App\Classes\Example2;
use App\Classes\Teacher;
use App\Classes\Catagory;
class Student extends Teacher implements Example1,Example2
{
    use Catagory;

    protected $country = 'Bangladesh';
    public static $area = 'Farmgate';
    public function __construct()
    {
//        $this->name = 'Riaj';
//        $this->city = 'Savar';
    }

    public function manage()
    {
        echo self::$area;
//        echo $this->add();
//        echo "Institute name is $this->name and city is $this->city and country is $this->country";
    }

    public function one()
    {
        echo 'Hello One';
    }

    public function two()
    {
        echo 'Hello two';
    }

    public function three()
    {
         echo 'Hello three';
    }

    public function ten()
    {
        echo 'Ten';
    }

    public function ten1()
    {
        echo 'Ten2';
    }

    public function test()
    {
        echo 'Test';
    }
    public static function demo()
    {
        echo 'Hello Demo';
    }
}