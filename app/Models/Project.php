<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Define the table name if it's not the plural of the model name
    protected $table = 'projects';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'user_id',
        'project_name',
        'description',
        'start_date',
        'end_date',
        'technologies_used',
        'project_url',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
