<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Poems extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'description', 'verses_count', 'poet_id', 'poetic_type_id'];

    public function poet(): BelongsTo
    {
        return $this->belongsTo(Poet::class);
    }

    public function poeticTypes(): BelongsTo
    {
        return $this->belongsTo(Poetic_type::class);
    }
}
