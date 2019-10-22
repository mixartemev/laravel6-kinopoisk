<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function getRate()
    {
        return round($this->rating, 1);
    }
}
