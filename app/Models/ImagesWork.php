<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImagesWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_id',
        'image_format',
        'image_path'
    ];

    public function work(): BelongsTo
    {
        return $this->belongsTo(Work::class);
    }
}
