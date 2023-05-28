<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        "status_id",
        "user_id",
        "history_name",
        "is_show",
    ];
}
