<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;
use MongoDB\BSON\ObjectID;



class checkController extends Controller
{
  

   public function index($id){
  
      $collection = (new Mongo)->TreeUCheck->announce;
      $collection2 = (new Mongo)->TreeUCheck->register;
      $item = $collection->findOne(array('_id' => new ObjectID($id))); 
      $reg = $collection2->find(array('pk' => $id)); 
     


      return view('check',["data"=>$item,"id"=>$id,"tb"=>$reg->toArray()]);
   
   }


    public function del($name,$sur){
          $collection = (new Mongo)->TreeUCheck->register;

        $collection->deleteOne( array( 'name' => $name,'sur' => $su ) );
        return redirect()->route('check');
        
    }










    public function update($name,$sur){
      dd($name,$sur);

        $collection = (new Mongo)->TreeUCheck->register;
        $reg = $collection2->find(array('name' => $name,'sur' => $sur)); 
dd($reg);

        $collection->updateOne(
    [ 'restaurant_id' => '40356151' ],
    [ '$set' => [ 'status' => '' ]]
);

        return redirect()->route('check');
        
    }

 
}
 