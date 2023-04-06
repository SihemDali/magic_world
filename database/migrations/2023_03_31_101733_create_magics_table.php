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
        Schema::create('magics', function (Blueprint $table) {
            $table->id();
            $table->string('nom',50)->unique();
            $table->text('description');
            $table->string('specialite',50);
            $table->unsignedTinyInteger('magie');
            $table->unsignedTinyInteger('force');
            $table->unsignedTinyInteger('agilite');
            $table->unsignedTinyInteger('intelligence');
            $table->unsignedTinyInteger('pv');
            $table->string('groupe',50);
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('groupe_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('groupe_id')->references('id')->on('groupes');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magics');
    }
};
