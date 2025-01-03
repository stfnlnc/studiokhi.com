<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'color'
    ];

    public static function boot(): void
    {
        parent::boot();

        static::deleting(function ($tag) {
            // Supprime les relations dans la table pivot
            $tag->works()->detach();
        });

        static::deleting(function ($tag) {
            // Supprime les relations dans la table pivot
            $tag->posts()->detach();
        });
    }

    public function works(): BelongsToMany
    {
        return $this->belongsToMany(Work::class);
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
