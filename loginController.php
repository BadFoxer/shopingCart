<?php
/* controler by BadFoxer  used for get current user records and delete 
run this command before using Auth 
php artisan make:auth  */
namespace App\Http\Controllers;

use Illuminate\Http\Request; // this class used send request to server
use Illuminate\Support\Facades\Input; // this class used for get value from input
use Illuminate\Support\Facades\DB; //   this class used for DB
use Illuminate\Support\Facades\Auth; //  this class used for authentication

class loginController extends Controller
{
    public function login(){


    	return view('login'); // view login page

    }

    public function postUser(){

      $varotojas = Input::get('vardas'); // get input field by name

if($varotojas){ // if its true execute code 

 $research = DB::table('useriai')->where('vardas',$varotojas, Auth::id())->get(); // this query finds user name and all records belong to user :) you can put id name and ect...

 DB::table('useriai')->where('vardas',$varotojas, Auth::id())->delete(); // delete current user records based on name id and etc..


foreach ($research as $users) { // loop all table records colection 
  
echo $users->vardas." ".$users->prekes.'<br>'; // print out records 

 
}
}
}
}
