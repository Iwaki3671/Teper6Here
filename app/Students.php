<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public function group()
    {
        return $this->belongsTo(Groups::class);
    }
}
