<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Poet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'country_id', 'description', 'special', 'era_id'];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function era(): BelongsTo
    {
        return $this->belongsTo(era::class);
    }
}
