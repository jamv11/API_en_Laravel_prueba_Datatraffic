<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;
	
    protected $casts = [ 'id' => 'int', 'residents' => 'array' ];
    protected $fillable = ['name','type','dimension','residents','url','created'];
}
