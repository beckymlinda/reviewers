<?php

// app/Models/AuditTrail.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AuditTrail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'action', 'model_type', 'model_id',
        'old_values', 'new_values',
    ];

    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
