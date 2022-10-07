<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protection extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = "ressource_id";
    protected $keyType = "string";
}
