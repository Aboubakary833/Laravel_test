<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Post extends Model
{
    use HasFactory, Uuid;

    protected $fillable = ['title', 'description', 'website_uuid'];

    public $incrementing = false;
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
}
