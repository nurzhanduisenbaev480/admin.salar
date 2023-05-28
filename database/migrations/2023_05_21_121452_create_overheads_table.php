<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('overheads', function (Blueprint $table) {
            $table->id();
            $table->string("order_code")->nullable()->unique();
            $table->string("overhead_code")->nullable()->unique();

            $table->integer("from_city")->default(1)->nullable();
            $table->string("from_name")->nullable();
            $table->string("from_company")->nullable();
            $table->string("from_address")->nullable();
            $table->string("from_phone")->nullable();

            $table->integer("to_city")->default(1)->nullable();
            $table->string("to_name")->nullable();
            $table->string("to_company")->nullable();
            $table->string("to_address")->nullable();
            $table->string("to_phone")->nullable();

            $table->text("cargo_details")->nullable(); // Характеристика груза
            $table->integer("counterparty")->nullable(); // Контрагент
            $table->integer("is_package")->nullable(); // Упаковка да/нет
            $table->integer("need_movers")->nullable(); // Грузчики Забор/Доставке
            $table->float("mass")->default(0.0)->nullable(); // Вес
            $table->float("volume")->default(0.0)->nullable(); // Объем
            $table->float("price")->default(0.0)->nullable(); // Цена
            $table->text("comment")->nullable();
            $table->text("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overheads');
    }
};
