<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $fillable = ["code", "model", "name", "quantity", "unit", "type", "category", "attribute"];
    protected $guarded = [];

    public function assembly(){
        return $this->belongsToMany(Assembly::class);
    }

    public function material(){
        return $this->belongsToMany(Material::class);
    }
}
