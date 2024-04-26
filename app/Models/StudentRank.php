<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentRank extends Model
{
    use HasFactory;

    //student_ranks

    public function student() : BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

}
