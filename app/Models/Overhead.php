<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overhead extends Model
{
    use HasFactory;

    protected $fillable = [
        "order_code",
        "overhead_code",
        "from_city",
        "from_name",
        "to_name",
        "counterparty",
        "cargo_details",
        "is_package", // Упаковка (да, нет)
        "mass",
        "volume",
        "need_movers", // Необходимы грузчики забор
        "need_movers", // Необходимы грузчики доставка
        "comment",
        "description"
    ];
}
