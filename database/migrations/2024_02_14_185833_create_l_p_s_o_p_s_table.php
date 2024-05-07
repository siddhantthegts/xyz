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
        Schema::create('lp_sop', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->nullable();
            $table->string('email',150)->nullable();
            $table->string('mobile',150)->nullable();
            $table->string('country',150)->nullable();
            $table->string('university',150)->nullable();
            $table->string('course',150)->nullable();
            $table->string('experience',150)->nullable();
            $table->longText('file')->nullable();
            $table->longText('requirement')->nullable();
            $table->string('url')->nullable();
            $table->string('source')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lp_sop');
    }
};
