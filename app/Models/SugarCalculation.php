<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SugarCalculation extends Model
{
    use HasFactory;

    protected $fillable = [
        'gula',
        'takaran_saji',
        'sajian_per_kemasan',
    ];
}
