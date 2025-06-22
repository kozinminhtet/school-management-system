<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = "subjects";
    protected $primaryKey = "id";
    protected $fillable = ["subject", "type"];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_subject');
    }

    // public function grades()
    // {
    //     return $this->belongsToMany(Grade::class);
    // }
}
