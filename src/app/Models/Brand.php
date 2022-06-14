<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function devices()
    {
    	return $this->hasMany(Device::class);
    }
    use HasFactory;
    
}
