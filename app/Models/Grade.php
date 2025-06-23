<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grade extends Model
{
    use HasFactory;
    protected $table = "grades";
    protected $primaryKey = "id";
    protected $fillable = ["grade"];
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function teacher()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}
