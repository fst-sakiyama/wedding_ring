<?php

namespace App\Http\Controllers;

use App\Models\Ring_basic_datum;
use Illuminate\Http\Request;

class Basic_dataController extends Controller
{
    public function index(Request $request){
      $items = Ring_basic_datum::orderBy('id','desc')->get();
      $deleted = Ring_basic_datum::onlyTrashed()->orderBy('id','desc')->get();
      return view('basic_data.index',['items'=>$items,'deleted'=>$deleted]);
    }

    public function detail(Request $request){
      $item = Ring_basic_datum::find($request->id);
      return view('basic_data.detail',['item'=>$item]);
    }

    public function add(Request $request){
      return view('basic_data.add');
    }

    public function create(Request $request){
      // $this->validate($request,Ring_basic_datum::$rules($request->id));
      $ring_basic_datum = new Ring_basic_datum;
      $form=$request->all();
      unset($form['_token']);
      $ring_basic_datum->fill($form)->save();
      return redirect('/basic_data');
    }

    public function edit(Request $request){
      $item = Ring_basic_datum::find($request->id);
      return view('basic_data.edit',['item'=>$item]);
    }

    public function update(Request $request){
      $this->validate($request,Ring_basic_datum::$rules);
      $ring_basic_datum=Ring_basic_datum::find($request->id);
      $form=$request->all();
      unset($form['_token']);
      $ring_basic_datum->fill($form)->save();
      return redirect('/basic_data');
    }

    public function remove(Request $request){
      Ring_basic_datum::find($request->id)->delete();
      return back();
    }

    public function restore(Request $request){
      Ring_basic_datum::onlyTrashed()->find($request->id)->restore();
      return back();
    }
}
