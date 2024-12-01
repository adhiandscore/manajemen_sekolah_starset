<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['kelas','mata_pelajaran'];

    public function users(){
        return $this->belongsTo(User::class);
    }

    // revisi ai, nambahin belongsToMany dg pivot grade
    public function subjects() {
        return $this->belongsToMany(Subject::class)->withPivot('grade');
    }
}
