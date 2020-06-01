<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triangle extends Model implements Polygon
{
    protected $fillable = ['sideA','sideB','sideC'];

    public function perimeter(){
        return $this->sideA + $this->sideB + $this->sideC;
    }

    public function area(){
        $a = $this->sideA;
        $b = $this->sideB;
        $c = $this->sideC;

        $s = ($a + $b + $c) / 2; 

        return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    }
}
