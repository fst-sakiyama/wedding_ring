<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ring_class extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'className' => ['required','string','unique:ring_classes'],
    );

    public function classes()
    {
      return $this->hasmany('App\Models\Ring_template');
    }
}
