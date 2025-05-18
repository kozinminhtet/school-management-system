<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MRC extends Model
{
    use HasFactory;
    protected $table = "m_r_c_s";
    protected $primaryKey = "id";
    protected $fillable = ["student_id", "month", "myan", "eng", "maths", "geog", "hist", "science", "pass"];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
