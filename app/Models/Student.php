<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable =[
        'name',
        'gender',
        'nis',
        'class_id',
        'image',
        'extracurriculars_id'
    ];  

    public function class()
    {
        return $this->belongsTo(classroom::class);
    }

    /**
     * The roles that belong to the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function extracurriculars()
    {
        return $this->belongsTo(Extracurricular::class);
    }
}
