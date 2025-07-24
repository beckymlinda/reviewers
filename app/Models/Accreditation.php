<?php
// app/Models/Accreditation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model
{
    protected $fillable = [
        'institution_name', 'campus', 'activity_type',
        'start_date', 'end_date', 'record_date',
        'programmes', 'accreditation_status', 'notes',
    ];
}
