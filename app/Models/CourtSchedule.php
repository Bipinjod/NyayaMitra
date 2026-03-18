<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourtSchedule extends Model
{
    protected $fillable = [
        'legal_case_id', 'court_room', 'hearing_date', 'hearing_time',
        'judge', 'status', 'notes',
    ];

    protected function casts(): array
    {
        return [
            'hearing_date' => 'date',
            'hearing_time' => 'datetime:H:i',
        ];
    }

    public function legalCase(): BelongsTo
    {
        return $this->belongsTo(LegalCase::class);
    }
}
