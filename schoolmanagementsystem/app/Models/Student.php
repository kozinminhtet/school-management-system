<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $primaryKey = "id";
    protected $fillable = [
        'register_no',
        'student_name',
        'grade_id',
        'address',
        'father_name',
        'mother_name',
        'phone',
        'gender',
        'image', // Add other fields if needed
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function mrc()
    {
        return $this->hasOne(MRC::class);
    }
    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}
