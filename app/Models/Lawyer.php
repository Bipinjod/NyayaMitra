<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lawyer extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'specialization', 'bar_number',
        'experience_years', 'bio', 'is_available',
    ];

    protected function casts(): array
    {
        return [
            'is_available' => 'boolean',
        ];
    }

    public function contactRequests(): HasMany
    {
        return $this->hasMany(ContactRequest::class);
    }
}
