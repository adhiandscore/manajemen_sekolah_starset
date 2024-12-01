<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['nilai'];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
    public function subjects()
    {
        return $this->belongsTo(Subject::class);
    }

}
