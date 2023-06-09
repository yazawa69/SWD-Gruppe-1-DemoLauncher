<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany};

class PhaseDevice extends Model
{
    use HasFactory;

    public function phase(): BelongsTo
    {
        return $this->belongsTo(Phase::class);
    }

    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }

    public function demoMaterials(): BelongsToMany
    {
        return $this->belongsToMany(DemoMaterial::class, 'phase_device_demo_materials');
    }

}
