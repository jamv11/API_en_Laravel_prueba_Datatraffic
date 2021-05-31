<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $casts = [ 'id' => 'int', 'origin' => 'array', 'location' => 'array', 'episode' => 'array' ];
    protected $fillable = ['name','status','species','type','gender','origin','location','image','episode','url','created'];
}
