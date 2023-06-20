<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $req) {
      $users = User::all();
      return $users;
    }

    public function findOne(Request $req) {
      $user = User::find($req->id);
      return $user;
    }

    public function create(Request $r){
      // variavel = request>metodo only, onde eu passo os campos que eu tenho na tabela ou queira.
      $newUsers = $r->only(['name', 'email', 'password']);
      // variavel user = model User::metodo create passando os dados acima.
      $user = User::create($newUsers);
      // retorna o novo user;
      return $user;
    }
}
