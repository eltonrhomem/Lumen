<?php


namespace App\Http\Controllers;

// use Symfony\Component\HttpKernel\Tests\Controller;




class HelloController extends Controller
{

    public function index($name){
        return 'Hello, '.$name;
    }

}




?>