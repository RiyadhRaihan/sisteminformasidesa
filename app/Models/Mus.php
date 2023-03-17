<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mus extends Model
{
    use HasFactory;
    protected $table = 'mus';
    protected $guarded = [];
    public $timestamps = false;
}
