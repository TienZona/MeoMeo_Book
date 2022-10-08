<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model {
    protected $table = 'color';
    protected $fillable = ['color'];

    protected function getAll(){
        return $this::all();
    }

}