<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    
  public function index(){
    return view('home',[
      "title" => "Dashboard | Home",
      "users" => User::all(),
    ]);
  }
}
