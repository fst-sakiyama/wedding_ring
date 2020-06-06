<?php

namespace App\Http\Controllers;

use App\Models\Ring_basic_datum;
use App\Models\Answer;
use App\Models\CountSearch;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Wedding_ringController extends Controller
{
  public function index(Request $request)
  {
    $items = Ring_basic_datum::orderBy('id','desc')->get();
    $searches = array();
    return view('wedding_ring.index',['items'=>$items]);
  }

  public function search(Request $request)
  {
    $query = Answer::query();
    $datum=array();
    // echo "<script type='text/javascript'>alert('". $request->class_id. "');</script>";
    for($i=0;$i<10;$i++){
      if(isset($request->search[$i])){
        $item = $request->search[$i];
        $query->where('answer','like','%'.$item.'%');
        $now=Carbon::now();
        $datum = array('tableNo'=>2,'word'=>$item,'created_at'=>$now,'updated_at'=>$now);
        CountSearch::insert($datum);
      }
    }
    $items = $query->get();
    // echo "<script type='text/javascript'>alert('". $request->search[0]. "');</script>";
    return view('wedding_ring.search',['items'=>$items]);
  }

}
