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
        Schema::create('winnings', function (Blueprint $table) {
            $table->primary(['user_id', 'brand_id', 'part_id' ]);
            $table->foreignID('user_id')->references('id')->on('users');
            $table->foreignID('brand_id')->references('brand_id')->on('brands');
            $table->foreignID('part_id')->references('part_id')->on('parts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('winnings');
    }
};
