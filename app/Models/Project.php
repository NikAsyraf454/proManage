<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function Student()
    {
        return $this->hasOne(Student::class);
    }

    public function Supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }

    public function Examiner1()
    {
        return $this->belongsTo(User::class, 'examiner1_id');
    }

    public function Examiner2()
    {
        return $this->belongsTo(User::class, 'examiner2_id');
    }
}
