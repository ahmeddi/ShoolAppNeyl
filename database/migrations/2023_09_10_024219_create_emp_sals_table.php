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
        Schema::create('emp_sals', function (Blueprint $table) {
            $table->id();
            $table->string('motif');
            $table->foreignId('emp_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('montant');
            $table->date('date');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_sals');
    }
};
