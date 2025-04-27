<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    // Define the table name if it's not the plural of the model name
    protected $table = 'experiences';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'user_id',
        'company_name',
        'job_title',
        'start_date',
        'end_date',
        'currently_working',
        'description',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
