<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassList extends Model
{
    /** @use HasFactory<\Database\Factories\ClassListFactory> */
    use HasFactory;

    protected $fillable = ['name', 'active'];

    public function sections()
    {
        return $this->belongsToMany(Section::class, 'class_section');
    }
}
