<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $table = 'reminders';

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'priority',
        'status',
        'date_created',
        'date_updated'
    ];
}
