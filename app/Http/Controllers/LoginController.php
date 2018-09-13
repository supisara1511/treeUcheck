<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class LoginController extends Controller



{
  public function auth(Request $request){

   $collection = (new Mongo)->TreeUCheck->member;
   // dd($request);

   $Query = array(
    'username' => $request['user'],
    'password' => $request['Pass'],
    'conpassword' => $request['conpass']
  );





   $cursor = $collection->findOne($Query);
   // dd($cursor);
   if($cursor["status"]=="0"){
    $request->session()->put('user', $request['user']);
    $request->session()->put('status', $cursor["status"]);
    return redirect()->route('admin.dashboard');
  }elseif($cursor["status"]=="1"){
    $request->session()->put('user', $request['user']);
    $request->session()->put('status', $cursor["status"]);
    return redirect()->route('user.index');
  }else{
    return redirect()->route('index');
  }
   // var_dump($cursor);
   // exit();
   // dd($cursor);
   // dd($cursor->toArray());
   // foreach ($cursor->toArray() as $doc) {
   //  dd($doc["name"]);
   // }




}
public function test(Request $request){
  dd($request->session()->all());
}

public function logout(Request $request){
  $request->session()->flush();   
  return redirect()->route('index'); 
}


public function sent(Request $request){
  $collection = (new Mongo)->TreeUCheck->member;


  $doc = array(
    'username' => $request['user'],
    'password' => $request['pass'],
    'name' => $request['name'],
    'surname' => $request['sur'],
    'email' => $request['email'],
    'status' => $request['cars'],

  );

  if( $request['pass'] == $request['conpass']){
    $collection->insertOne( $doc );
    return redirect()->route('addmember');
  }else{
    return redirect()->route('addmember');
  }

  



}



}
