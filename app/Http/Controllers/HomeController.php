<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	public $variable1="I am Data";

    public function __construct() {

        //Information:
       // $inf_name = "Mr. Hiếu";
       // $inf_mobile = "093456.4161";
       // $inf_cty = "Toyota Tân Cảng";
       // $inf_email = "toyotahcm.tancang@gmail.com";
       // $inf_addr = "220Bis Ðiện Biên Phủ, P.22, Q. Bình Thạnh, Tp. HCM";
       $infors = array('name' => "Mr. Hiếu" ,
                       'mobile' => "093456.4161",
                       'cty' => "Toyota Tân Cảng",
                       'email' => "toyotahcm.tancang@gmail.com",
                       'addr' =>  "220Bis Ðiện Biên Phủ, P.22, Q. Bình Thạnh, Tp. HCM",                      
                        );
       // $inf_name = "Mr. Hiếu";
       // $inf_name = "Mr. Hiếu";
       // $inf_name = "Mr. Hiếu";


       View::share ( 'variable1', $this->variable1 );
       View::share ( 'infors', $infors );
       // View::share ( 'variable3', 'I am Data 3' );
       // View::share ( 'variable4', ['name'=>'Franky'] );
    }  
    //
    
    public function index() {
    	//return view('home.index');
    	return View::make('home.index');
    }
    
    public function gioithieu() {
    	//return view('home.index');
    	return View::make('home.gioithieu');
    }
    
    public function sanpham() {
    	//return view('home.index');
    	return View::make('home.sanpham');
    }
    
    public function chitiet() {
    	//return view('home.index');
    	return View::make('home.chitiet');
    }
    
    public function khuyenmai() {
    	//return view('home.index');
    	return View::make('home.khuyenmai');
    }

    public function tintuc() {
    	//return view('home.index');
    	return View::make('home.tintuc');
    }

    public function lienhe() {
    	//return view('home.index');
    	return View::make('home.lienhe');
    }

}
