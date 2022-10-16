<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = "string";

    public function protection(): HasOne
    {
        return $this->hasOne(Protection::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
