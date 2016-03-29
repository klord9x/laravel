<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	public $variable1="I am Data";

    public function __construct() {

       $variable2 = "I am Data 2";


       View::share ( 'variable1', $this->variable1 );
       View::share ( 'variable2', $variable2 );
       View::share ( 'variable3', 'I am Data 3' );
       View::share ( 'variable4', ['name'=>'Franky'] );
    }  
    //
    public function index() {
    	//return view('home.index');
    	return View::make('home.index');
    }
}
