<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_school_fee extends Model
{
    protected $fillable = ['student_id', 'spp_id', 'date_of_payment', 'month'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function spp()
    {
        return $this->hasMany(School_fee::class);
    }
}
