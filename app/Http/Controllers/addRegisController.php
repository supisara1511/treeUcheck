<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class addRegisController extends Controller
{
  

public function sent(Request $request){
  $collection = (new Mongo)->TreeUCheck->announce;


  $doc = array(
    'name' => $request['name'],
    'detail' => $request['detail'],
    'datestrat' => $request['datestrat'],
    'datestop' => $request['datestop'],
    'time' => $request['time'],
    'station' => $request['station'],
    'contect' => $request['contect'],
    'regstrat' => $request['regstrat'],
    'regstop' => $request['regstop'],
    'count' => $request['count'],
    'pic' => ""


  );

  

 
    $collection->insertOne($doc);
    return redirect()->route('addregister');
  
  }

   public function index(){
        $collection = (new Mongo)->TreeUCheck->announce;
        $cursor = $collection->find();
        return redirect()->route('home',["data"=>$cursor->toArray()]);
   
   }

  


}
