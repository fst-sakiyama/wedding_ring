<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = array('id');

    public static $rules = array(
        'answer' => ['required','string'],
    );

}
