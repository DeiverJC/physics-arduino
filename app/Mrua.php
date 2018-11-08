<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mrua extends Model
{
    protected $fillable = ['t1', 't2'];

    protected $appends = ['vi', 'vf', 'td', 'a'];

    public function getViAttribute()
    {
        return round($this->d1 / $this->t1, 2);
    }

    public function getVfAttribute()
    {
        return round($this->d2 / $this->t2, 2);
    }

    public function getTdAttribute()
    {
        return $this->t1 + $this->t2;
    }

    public function getAAttribute()
    {
        return round(($this->vf - $this->vi) / $this->td, 4);
    }
}
