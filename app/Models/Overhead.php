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
        "from_company",
        "from_address",
        "from_phone",
        "to_name",
        "to_company",
        "to_address",
        "to_phone",
        "counterparty", // Контрагент
        "company_type", // Юр. лицо / Физ. лицо
        "cargo_details",
        "is_package", // Упаковка (да, нет)
        "mass",
        "volume",
        "price",
        "need_movers", // Необходимы грузчики забор
        "need_movers", // Необходимы грузчики доставка
        "comment",
        "description",
        "order_start_date",
        "order_end_date",
        "user_id"
    ];
}
