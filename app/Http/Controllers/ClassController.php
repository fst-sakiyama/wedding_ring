<?php

namespace App\Http\Controllers;

use App\Models\Ring_class;
use Illuminate\Http\Request;

class ClassController extends Controller
{
  public function index(Request $request)
  {
    $items = Ring_class::all();
    return view('classes.index',['items'=>$items]);
  }

  public function add(Request $request)
  {
    $item=Ring_class::max('seq');
    return view('classes.add',['item'=>$item]);
  }

  public function create(Request $request)
  {
    $this->validate($request,Ring_class::$rules);
    $Ring_class = new Ring_class;
    $form=$request->all();
    unset($form['_token']);
    $Ring_class->fill($form)->save();
    return redirect('/classes');
  }

  public function edit(Request $request)
  {
    $item = Ring_class::find($request->id);
    return view('classes.edit',['item'=>$item]);
  }

  public function update(Request $request)
  {
    $this->validate($request,Ring_class::$rules);
    $Ring_class=Ring_class::find($request->id);
    $form=$request->all();
    unset($form['_token']);
    $Ring_class->fill($form)->save();
    return redirect('/classes');
  }

  public function remove(Request $request)
  {
    Ring_class::find($request->id)->delete();
    return redirect('/classes');
  }

}
