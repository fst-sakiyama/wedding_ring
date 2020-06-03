<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ring_template extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = array('id');

    public static $rules = array(
      'name' => ['required','string'],
      'body' => ['required','string'],
    );

    public function class()
    {
      return $this->belongsTo('App\Models\Ring_class');
    }
}
