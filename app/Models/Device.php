<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'oem',
        'product_line',
        'serial_number',
    ];
    
    private $name;
    private $oem;
    private $product_line;
    private $serial_number;

    public function phases(): BelongsToMany
    {
        return $this->belongsToMany(Phase::class, 'phase_devices');
    }

}
