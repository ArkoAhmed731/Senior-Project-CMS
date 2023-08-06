<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $primaryKey = 'application_id';
    public $incrementing = false;

    protected $fillable = [
        'application_id',
        'application_title',
        'application_type',
        'application_date',
        'application_description',
        'applicant_name',
    ];
}
