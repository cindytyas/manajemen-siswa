<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'gender', 'place_of_birth', 'date_of_birth', 'work', 'address', 'religion', 'student_id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
