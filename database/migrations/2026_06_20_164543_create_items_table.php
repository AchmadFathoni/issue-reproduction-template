<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->nullable(); // scroll padding
            $table->text('notes')->nullable();            // scroll padding
            $table->string('status')->nullable();          // scroll padding
            $table->integer('quantity')->nullable();        // scroll padding
            $table->string('sku')->nullable();              // scroll padding
            // Extra text fields purely to ensure modal overflows:
            $table->text('field_a')->nullable();
            $table->text('field_b')->nullable();
            $table->text('field_c')->nullable();
            $table->text('field_d')->nullable();
            $table->text('field_e')->nullable();
            $table->text('field_f')->nullable();
            $table->text('field_g')->nullable();
            $table->text('field_h')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
