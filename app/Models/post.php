<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['user_id','post','like'];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
