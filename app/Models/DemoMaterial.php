<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DemoMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'data',
    ];

    private $name;
    private $data;

    public function phaseDevices(): BelongsToMany
    {
        return $this->belongsToMany(PhaseDevice::class, 'phase_device_demo_materials');
    }

}
