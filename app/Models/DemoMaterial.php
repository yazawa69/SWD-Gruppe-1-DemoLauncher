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
        'file_path',
        'description',
    ];

    protected $attributes = [
        'description' => '',
    ];

    private $name;
    private $file_path;
    private $description;

    public function demoMaterialType(): BelongsTo
    {
        return $this->belongsTo(DemoMaterialType::class);
    }

    public function phaseDevices(): BelongsToMany
    {
        return $this->belongsToMany(PhaseDevice::class, 'phase_device_demo_materials');
    }

}
