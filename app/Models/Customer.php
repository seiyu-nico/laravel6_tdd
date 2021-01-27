<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
