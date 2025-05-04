<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['title', 'description', 'icon', 'carousel_images', 'grade', 'set', 'signal', 'completeness', 'sparepart', 'originality'];

    protected $casts = [
        'carousel_images' => 'array',
    ];
}
