<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//a.Controllerクラスを継承

class PagesController extends Controller
{
    // Homeを表示
    public function getHome(){
      return view('home');
    }


    // Aboutを表示
    public function getAbout(){
      return view('about');
    }

    // Contactを表示
    public function getContact(){
      return view('contact');
    }

    public function list()
{

//Cafesから全行を取得

$data=[
  'records' =>Cafe::all()
];

return view('home.list',$data);

}

}

use App\Cafe;

