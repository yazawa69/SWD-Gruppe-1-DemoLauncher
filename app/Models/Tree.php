<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class Tree extends Model
{
    use HasFactory;

    public const ATTRIBUTE_TREE_LEAVES = 'treeLeaves';

    public function forest(): BelongsTo
    {
        return $this->belongsTo(Forest::class);
    }

    public function treeLeaves(): HasMany
    {
        return $this->hasMany(TreeLeaf::class);
    }
}
