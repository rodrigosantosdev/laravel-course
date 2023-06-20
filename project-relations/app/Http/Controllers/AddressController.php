<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{ 
    public function index(Request $req) {
      $address = Address::all();
      return $address;
    }

    public function findOne(Request $req){
      $address = Address::find($req->id);
      return $address;
    }

    public function create(Request $r){
      $newAddres = $r->only(['address']);
      
      $address = Address::create($newAddres);

      return $address;
    }
}
