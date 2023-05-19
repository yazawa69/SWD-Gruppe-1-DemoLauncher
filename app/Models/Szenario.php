<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szenario extends Model
{
    use HasFactory;
    /**
    * Primary key.
    */
    protected $primaryKey = 'teacher_id';
    
    protected $fillable = ['name', 'description', 'phases'];

    private $name;
    private $description;
    private $phases;

}
