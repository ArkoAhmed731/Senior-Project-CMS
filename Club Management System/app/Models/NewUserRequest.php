<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewUserRequest extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'new_user_requests';

    // Define the fillable fields (columns) of the table
    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'contact_number',
        'gender',
        'password',
    ];
}
