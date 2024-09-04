<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Praktikum 2//

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }      
    
    public function index() {
        return 'Selamat Datang';
    }  
    
    public function about() {
        return 'Athif - 2241760107';
    }

    public function articles($id) {
        return 'Halaman Artikel : '.$id;
    }

}