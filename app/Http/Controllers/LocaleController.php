<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
  public function index($lang){
    App::setlocale($lang);
    return view('welcome');
  }
}
