<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        'is_online',
        'is_published',
        'image_format',
        'image_path'
    ];

    public static function boot(): void
    {
        parent::boot();

        static::deleting(function ($work) {
            // Supprime les relations dans la table pivot
            $work->tags()->detach();
        });
    }

    public function images(): HasMany
    {
        return $this->hasMany(ImagesWork::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
