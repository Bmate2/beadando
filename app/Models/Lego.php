<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lego extends Model
{
    use HasFactory;
    protected $primaryKey='code';
    protected $fillable = [
        "code","name","pieces","price"
    ];
}
