<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['nama','nip','mata_pelajaran'];

    public function users(){
        return $this->belongsTo(User::class);
    }
    
    // revisi ai, teacher mengajar mapel (subject), konsiderasi pasang
    // many-to-many relationship antara teacher dengan subject, melalui pivot table grade

    public function subjects() {
        return $this->belongsToMany(Subject::class)->withPivot('grade');
    }

    public function subjects () {
        return $this->belongsToMany(Teacher::class)->withPivot('grade');
    }

}
