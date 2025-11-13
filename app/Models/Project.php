<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use softDeletes;

    protected $fillable = [
        'name',
        'description',
        'owner_id',
        'status',
        'icon',
        'color',
        'sequence'
    ];

    protected $casts = [
        'sequence' => 'integer',
        'status' => 'boolean',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
