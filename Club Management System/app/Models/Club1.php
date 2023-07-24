<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club1 extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'student_name', 'student_email', 'contact_number', 'student_gender', 'club_position'];
}
