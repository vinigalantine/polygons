<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rectangle extends Model
{
    protected $fillable = ['sideA','sideB'];

    public function perimeter(){
        return $this->sideA*2 + $this->sideB*2;
    }

    public function area(){
        return $this->sideA * $this->sideB;
    }
}
