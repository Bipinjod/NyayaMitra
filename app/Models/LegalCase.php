<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LegalCase extends Model
{
    protected $fillable = [
        'case_number', 'title', 'plaintiff', 'defendant', 'court', 'judge',
        'case_type', 'status', 'filed_date', 'next_hearing', 'verdict', 'description',
    ];

    protected function casts(): array
    {
        return [
            'filed_date' => 'date',
            'next_hearing' => 'datetime',
        ];
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(CourtSchedule::class, 'legal_case_id');
    }
}
