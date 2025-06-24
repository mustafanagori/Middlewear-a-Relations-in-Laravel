<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use App\Models\Groups;

class IndexController extends Controller
{
    //
    public function index()
    {
       // $gorup = Groups::get();
      return Members::with('group')->get();
       // return [$gorup , $memebers];
     
    }

    public function group()
    {
       // $gorup = Groups::get();
      return Groups::with('member')->get();

       // return [$gorup , $memebers];
     
    }
}
