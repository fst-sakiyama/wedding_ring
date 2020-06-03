<?php

namespace App\Http\Controllers;

use App\Models\Ring_template;
use App\Models\Ring_class;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
  public function add(Request $request)
  {
    $id=null;
    if (isset($request->id))
    {
      $id=$request->id;
    }
    $items=Ring_class::all();
    return view('templates.add',['items'=>$items,'id'=>$id]);
  }

  public function create(Request $request)
  {
    $id=(isset($request->id) ? '?id='.$request->id : '');
    $this->validate($request,Ring_template::$rules);
    $Ring_template = new Ring_template;
    $form=$request->all();
    unset($form['_token']);
    $Ring_template->fill($form)->save();
    return redirect('/subjects'.$id);
  }

  public function edit(Request $request)
  {
    $item = Ring_template::find($request->id);
    $classes=Ring_class::all();
    return view('templates.edit',['item'=>$item,'classes'=>$classes]);
  }

  public function update(Request $request)
  {
    $id=$request->class_id;
    $this->validate($request,Ring_template::$rules);
    $Ring_template=Ring_template::find($request->id);
    $form=$request->all();
    unset($form['_token']);
    $Ring_template->fill($form)->save();
    return redirect('/subjects?id='.$id);
  }

  public function remove(Request $request)
  {
    Ring_template::find($request->id)->delete();
    return back();
  }
}
