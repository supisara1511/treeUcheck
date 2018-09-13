<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class userController extends Controller
{
     public function index(){
        $collection = (new Mongo)->TreeUCheck->announce;
        $cursor = $collection->find();
        return view('userindex',["data"=>$cursor->toArray()]);
   
   }


    public function del($id){
         	$collection = (new Mongo)->TreeUCheck->announce;

   			$cursor = $collection->deleteOne( array( 'name' => $id ) );
    		return redirect()->route('user.index');
        
    }

}
