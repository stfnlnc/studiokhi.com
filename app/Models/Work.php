<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'category',
        'type',
        'date',
        'url',
        'description',
        'order',
        'online',
        'image_format',
        'image_path'
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ImagesWork::class);
    }
}
