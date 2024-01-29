<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_fee extends Model
{
    protected $fillable = ['name_school_fee', 'payment', 'nominal'];
}
