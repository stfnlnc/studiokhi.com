<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'category',
        'type',
        'date',
        'url',
        'description',
        'order',
        'online',
        'image',
    ];
}
