<?php

namespace App\Http\Controllers;

use App\Models\Ring_template;
use App\Models\Ring_class;
use App\Models\CountSearch;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
      $className=null;

      if (isset($request->id))
      {
        $items = Ring_template::with('class')
                  ->where('class_id',$request->id)
                  ->get();
        $deleted = Ring_template::with('class')
                  ->onlyTrashed()
                  ->where('class_id',$request->id)
                  ->get();
        $className = Ring_class::find($request->id);
      } else {
        $items = Ring_template::with('class')
                  ->orderBy('class_id','asc')
                  ->get();
        $deleted=Ring_template::with('class')
                  ->onlyTrashed()
                  ->orderBy('class_id','asc')
                  ->get();
      }
      $ringClass=Ring_class::all();
      return view('subjects.index',['items'=>$items,'deleted'=>$deleted,'className'=>$className,'ringClass'=>$ringClass]);
    }

    public function search(Request $request)
    {
      $deleted=null;
      $className=null;
      $datum=array();

      $query = Ring_template::with('class');

      if (isset($request->class_id))
      {
        $query->where('class_id','=',$request->class_id);
        $className = Ring_class::find($request->class_id);
        // echo "<script type='text/javascript'>alert('". $request->class_id. "');</script>";
      }

      // echo "<script type='text/javascript'>alert('". $request->class_id. "');</script>";
      for($i=0;$i<10;$i++){
        if(isset($request->search[$i])){
          $item = $request->search[$i];
          $query->where('body','like','%'.$item.'%');
          // echo "<script type='text/javascript'>alert('". $item. "');</script>";
          $now=Carbon::now();
          $datum = array('tableNo'=>1,'word'=>$item,'created_at'=>$now,'updated_at'=>$now);
          CountSearch::insert($datum);
        }
      }
      $items = $query->orderBy('class_id','asc')->get();
      $ringClass=Ring_class::all();
      return view('subjects.index',['items'=>$items,'deleted'=>$deleted,'className'=>$className,'ringClass'=>$ringClass]);
    }

    public function restore(Request $request)
    {
      Ring_template::onlyTrashed()->find($request->id)->restore(); // restoreメソッドで復旧
      return back();
    }

    public function force_delete(Request $request)
    {
      Ring_template::onlyTrashed()->find($request->id)->forceDelete(); //forceDeleteメソッドで物理削除
      return back();
    }
}
