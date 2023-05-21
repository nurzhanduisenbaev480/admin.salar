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
            $table->string("to_name")->nullable();
            $table->text("cargo_details")->nullable();
            $table->integer("counterparty")->nullable();
            $table->integer("is_package")->nullable();
            $table->integer("need_movers")->nullable();
            $table->float("mass")->default(0.0)->nullable();
            $table->float("volume")->default(0.0)->nullable();
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
