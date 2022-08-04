<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    private $lista = array('Dragon Ball','Inuyasha','Re:Zero');

    public function index(){
        $lista = $this->lista;
        return view('series.index',compact('lista'));
    }
    
    public function show(Request $request): int{
        foreach($this->lista as $name){
            echo "$name <br>";
        }
        
    }

    public function create(){
        return view('series.create');
    }
}
