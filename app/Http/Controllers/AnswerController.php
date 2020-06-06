<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index(Request $request)
    {
        $items = Answer::all();
        $deleted = Answer::onlyTrashed()->get();
        return view('answers.index',['items'=>$items,'deleted'=>$deleted]);
    }

    public function create(Request $request)
    {
        // $this->validate($request,Answer::$rules());
        $Answer = new Answer;
        $form=$request->all();
        unset($form['_token']);
        $Answer->fill($form)->save();
        return redirect('/answers');
    }

    public function edit(Request $request){
      $item = Answer::find($request->id);
      return view('answers.edit',['item'=>$item]);
    }

    public function update(Request $request){
      $this->validate($request,Answer::$rules);
      $Answer=Answer::find($request->id);
      $form=$request->all();
      unset($form['_token']);
      $Answer->fill($form)->save();
      return redirect('/answers');
    }

    public function remove(Request $request){
      Answer::find($request->id)->delete();
      return back();
    }

    public function restore(Request $request){
      Answer::onlyTrashed()->find($request->id)->restore();
      return back();
    }

    public function force_delete(Request $request)
    {
      Answer::onlyTrashed()->find($request->id)->forceDelete(); //forceDeleteメソッドで物理削除
      return back();
    }
}
