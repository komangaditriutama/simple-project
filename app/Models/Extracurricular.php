<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Extracurricular extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'student_id'
        
    ];

    public function students()
    {
        return $this->hasMany(Student::class,'extracurriculars_id','id');
    }
}
