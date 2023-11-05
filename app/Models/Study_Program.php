<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study_Program extends Model
{
    use HasFactory;

    protected $table = 'study_programs';

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
