<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticable;

class Student extends Authenticable
{
    use HasFactory;

    protected $guarded = [];

    /*
    public function centralAdmission() : HasOne
    {
        return $this->hasOne(StudentCAJoin::class);
    }
    */

    public function verbalSchedule() : HasOne
    {
        return $this->hasOne(VerbalSchedule::class);
    }

    public function logs() : HasMany
    {
        return $this->hasMany(StudentLog::class, 'edu_id', 'edu_id');
    }



}
