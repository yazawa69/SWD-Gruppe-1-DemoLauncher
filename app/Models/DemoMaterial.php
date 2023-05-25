<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsToMany, BelongsTo};

class DemoMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file',
    ];

    private $name;
    private $file;

    public function demoMaterialType(): BelongsTo
    {
        return $this->belongsTo(DemoMaterialType::class);
    }

    public function phaseDevices(): BelongsToMany
    {
        return $this->belongsToMany(PhaseDevice::class, 'phase_device_demo_materials');
    }

}
