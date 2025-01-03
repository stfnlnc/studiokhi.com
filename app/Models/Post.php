<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'image_path',
        'image_format',
        'published',
        'published_at',
        'author'
    ];

    public static function boot(): void
    {
        parent::boot();

        static::deleting(function ($post) {
            // Supprime les relations dans la table pivot
            $post->tags()->detach();
        });
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
