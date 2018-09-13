<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;
use MongoDB\BSON\ObjectID;



class RegisterController extends Controller
{
  

   public function index($id){
  
      $collection = (new Mongo)->TreeUCheck->announce;
      $collection2 = (new Mongo)->TreeUCheck->register;
      $item = $collection->findOne(array('_id' => new ObjectID($id))); 
      $reg = $collection2->find(array('pk' => $id)); 
      
      return view('testregister',["data"=>$item,"id"=>$id,"tb"=>$reg->toArray()]);
   
   }



   public function sent(Request $request){
      $collection = (new Mongo)->TreeUCheck->register;

      $doc = array(
          'pk' => $request['ID'],
          'name' =>  $request['name'],
          'sur' =>  $request['sur'],
          'email' =>  $request['email'],
          'phone' =>  $request['phone'],
          'add' =>  $request['add'],
          'status' => "0"
    );

        $collection->insertOne( $doc );

         return redirect()->route('home');

   
   }

    public function del($id){

        $collection = (new Mongo)->TreeUCheck->register;
        $collection->deleteOne( array( 'name' => $id));
        return redirect()->route('home');
        
    }



 
}
 