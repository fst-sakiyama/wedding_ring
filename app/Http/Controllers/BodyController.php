<?php

namespace App\Http\Controllers;

use App\Models\Ring_template;
use Illuminate\Http\Request;

class BodyController extends Controller
{
  public function index(Request $request)
  {
    $item = Ring_template::with('class')->where('id',$request->id)->first();
    return view('bodys.index',['item' => $item]);
  }
}
