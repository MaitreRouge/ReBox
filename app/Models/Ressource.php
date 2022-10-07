<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;

    protected $primaryKey = "item_id";
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = false;
}
