<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'oem',
        'serial_number',
    ];
    
    private $name;
    private $oem;
    private $serial_number;

    public function phaseDevices(): HasMany
    {
        return $this->hasMany(PhaseDevice::class);
    }

    public function deviceType(): BelongsTo
    {
        return $this->belongsTo(DeviceType::class);
    }
    
}
