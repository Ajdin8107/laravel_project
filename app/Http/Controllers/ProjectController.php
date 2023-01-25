<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function products(){

     $sokovi = DB::table('products')->where('category','Sokovi')->get();
     $sendvici = DB::table('products')->where('category','Sendvici')->get();

        return view('products',['Sokovi'=>$sokovi,'Sendvici'=>$sendvici]);

    }







 function single_product(Request $request,$id){

  $product_array = DB::table('products')->where('id',$id)->get();
  return view('single_product',['product_array' =>$product_array]);

}




}
