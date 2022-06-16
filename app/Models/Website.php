<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Website extends Model
{
    use HasFactory, Uuid;

    protected $fillable = ['url'];

    public $incrementing = false;
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    public function subscribers() {
        return $this->belongsToMany(User::class, 'website_user', 'website_uuid', 'user_id');
    }
}
