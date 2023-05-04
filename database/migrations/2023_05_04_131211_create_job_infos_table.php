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
        Schema::create('job_infos', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('job_name');
            $table->string('job_description');
            $table->string('job_status');
            $table->timestamps();

            $table->unique('job_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_infos');
    }
};
