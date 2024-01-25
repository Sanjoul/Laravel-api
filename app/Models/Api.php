<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;

    protected $table = 'apis';

    protected $fillable = [
        'name', 'image_path', 'video_path', 'description', 'pdf_path'
    ];
}
