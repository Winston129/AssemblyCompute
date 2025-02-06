<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ["code", "name", "consumption", "unit", "waste", "waste_unit"];
    protected $guarded = [];

    public function component(){
        return $this->belongsToMany(Component::class);
    }
}
