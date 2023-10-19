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
        Schema::create('onlineModules', function (Blueprint $table) {
            $table->id();
            $table->integer('moduleID')->nullable();
            $table->string('OMName')->nullable();
            $table->string('OMPageName')->nullable();
            $table->string('OMImage')->nullable();
            $table->integer('OMFee')->nullable();
            $table->text('OMDescription')->nullable();
            $table->string('OMDuration')->nullable();
            $table->integer('availability')->nullable();
            $table->integer('active')->nullable();
            $table->integer('isRise')->nullable();
            $table->text('learningObjectives')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('onlineModules');
    }
};
