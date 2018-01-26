<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderDetailsController extends Controller
{
  public function create()
  {
     return view('create');
  }
  public function store(Request $request)
  {

  }
}
