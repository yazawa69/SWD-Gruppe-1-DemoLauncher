<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TreeLeaf extends Model
{
    use HasFactory;

    public const ATTRIBUTE_TREE = 'tree';

    public function tree(): BelongsTo
    {
        return $this->belongsTo(Tree::class);
    }
}
