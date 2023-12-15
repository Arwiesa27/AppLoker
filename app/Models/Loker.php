<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $tables = "lokers";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
