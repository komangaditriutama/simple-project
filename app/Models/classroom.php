<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $fillable = [
        'name',
        'teachers_id',
    ];

    public function students()
    {
        return $this->hasMany(Student::class,'class_id','id');
    }
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teachers_id', 'id');
    }
}
