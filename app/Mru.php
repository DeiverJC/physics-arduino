<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mru extends Model
{
    protected $fillable = ['t1'];

    protected $appends = ['v'];

    public function getVAttribute()
    {
        return round($this->d1 / $this->t1, 4);
    }
}
