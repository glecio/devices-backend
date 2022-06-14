<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['name', 'description', 'voltage'];
    
    public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

    use HasFactory;
}
