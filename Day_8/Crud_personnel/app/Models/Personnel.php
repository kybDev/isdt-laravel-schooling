<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personnel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'personnel';

    protected $fillable = [
        'first_name', 
        'last_name', 
        'middle_name', 
        'age', 
        'birthdate', 
        'rating',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    


}
