<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelIlluminate\Database\Eloquent\Model;
class Employee extends Model
{
use HasFactory;
public function position()
{
return $this->belongsTo(Position::class);
}
}
