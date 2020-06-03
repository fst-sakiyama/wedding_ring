<?php

namespace App\Http\Controllers;

use App\Models\Ring_class;
use Illuminate\Http\Request;

class Wedding_ringController extends Controller
{
  public function index(Request $request)
  {
    $className=null;
    $ringClass=Ring_class::all();

    return view('wedding_ring.index',['className'=>$className,'ringClass'=>$ringClass]);
  }
}
