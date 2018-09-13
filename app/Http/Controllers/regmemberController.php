<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class regmemberController extends Controller
{
     public function index(){
         	$collection = (new Mongo)->TreeUCheck->member;
   			$cursor = $collection->find();
    		return view('regmember',["data"=>$cursor->toArray()]);
        
    }

     public function del($id){
         	$collection = (new Mongo)->TreeUCheck->member;

   			$cursor = $collection->deleteOne( array( 'username' => $id ) );
    		return redirect()->route('addmember');
        
    }
}
