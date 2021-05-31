<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    use HasFactory;
    protected $casts = [ 'id' => 'int', 'characters' => 'array' ];
    protected $fillable = ['name','air_date','episode','characters','url','created'];
}
