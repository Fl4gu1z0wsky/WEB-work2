<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @ return void
     */
    public function up(): void
    {
        Schema::create('animaux', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species');
            $table->string('sexe');
            $table->integer('age');
            $table->string('country');
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @ return void
     */
    public function down(): void
    {
        Schema::dropIfExists('animaux');
    }
};
