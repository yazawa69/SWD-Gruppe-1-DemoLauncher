<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DemoMaterialType extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename_extension',
    ];

    private $filename_extension;

    public function demoMaterials(): HasMany
    {
        return $this->hasMany(DemoMaterial::class);
    }


}
