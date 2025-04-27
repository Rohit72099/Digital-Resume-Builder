<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    // Define the table name if it's not the plural of the model name
    protected $table = 'educations';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'user_id',
        'institution_name',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'grade',
        'description',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
