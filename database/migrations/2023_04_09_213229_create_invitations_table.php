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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('magic_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('groupe_id');          
            $table->string('statut',10);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('groupe_id')->references('id')->on('groupes');
            $table->foreign('magic_id')->references('id')->on('magics');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
