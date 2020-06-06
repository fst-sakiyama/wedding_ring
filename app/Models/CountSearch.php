<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CountSearch extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = array('id');

    public static $rules = array(
        'tableNo' => ['required','numeric'],
        'word' => ['required','string'],
    );

}
