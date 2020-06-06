<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ring_basic_datum extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = array('id');

    public static $rules = array(
      'shortName' =>['required','string'],
      'formalName' => ['required','string'],
      'pageURL' => ['required','string','url'],
      // 'subjectEntry' => ['string'],
      // 'bodyEntry' => ['string'],
      // 'subjectApply' => ['string'],
      // 'bodyApply' => ['string'],
    );
}
