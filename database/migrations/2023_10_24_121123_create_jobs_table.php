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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('province');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            // $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete();
            $table->string('program_stream');
            $table->string('position');
            $table->string('employer');
            $table->string('incorporate_status');
            $table->string('approved_applications');
            $table->string('approved_positions');
            $table->string('year');
            $table->string('quarter');
            $table->string('city');
            $table->string('postal_code');
            $table->string('noc');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
