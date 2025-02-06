<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assembly extends Model
{
    use HasFactory;
    
    protected $fillable = ["code", "type", "form_factor", "budget", "power_consumption", "compatibility", "design"];
    protected $guarded = [];

    public function component(){
        return $this->belongsToMany(Component::class);
    }
}
