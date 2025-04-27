<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    // Specify the fields that are mass assignable
    protected $fillable = [
        'user_id',
        'name',
        'proficiency_level', // e.g., Beginner, Intermediate, Expert
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
