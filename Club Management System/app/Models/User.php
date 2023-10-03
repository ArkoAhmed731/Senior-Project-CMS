<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users'; // Specify the table name
    protected $primaryKey = 'user_id'; // Specify the primary key

    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'contact_number',
        'gender',
        'password',
        'bio',
        'user_type',
    ];

    public function getRole($user_type)
    {
        return $this->user_type == $user_type;

    }

    // Add any additional relationships or methods as needed
}
