<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teachers";
    protected $primaryKey = "id";
    protected $fillable = ["position_id", "teacher_name", "education", "image", "address", "phone"];
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_subject');
    }
    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'teacher_grade');
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
