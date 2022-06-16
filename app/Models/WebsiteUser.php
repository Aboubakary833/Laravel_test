<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteUser extends Model
{
    use HasFactory;
    protected $fillable = ['website_uuid', 'user_id'];
    protected $table = 'website_user';
}
