<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class posController extends Controller
{
    //
    public function index(){
        $slug = "menu";
        $crud =Menu::all();
        return view("index",compact("slug","crud"));
    }
}
