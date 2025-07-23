<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Reviewer extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'title',
        'gender',
        'qualification',
        'field_of_study',
        'area_of_specialisation',
        'awarding_institution',
        'year_obtained',
        'institution_of_work',
        'designation',
        'assessment_review_count',
        'mobilephone',
        'emailaddress',
        'physicaladdress',
        'postal_address',
        'place_of_residence',
        'training_status',
    ];
}
