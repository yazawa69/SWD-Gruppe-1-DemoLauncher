<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, BelongsToMany};

class Phase extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    
    private $name;

    public function scenario(): BelongsTo
    {
        return $this->belongsTo(Scenario::class);
    }

    public function devices(): BelongsToMany
    {
        return $this->belongsToMany(Device::class, 'phase_devices');
    }

}
