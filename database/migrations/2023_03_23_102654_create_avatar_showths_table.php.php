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
            Schema::create('avatar_showths', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('avatar_id');
                $table->unsignedBigInteger('showth_id');
                $table->timestamps();

                $table->foreign('avatar_id')
                    ->references('id')
                    ->on('avatars')
                    ->cascadeOnDelete();

                $table->foreign('showth_id')
                    ->references('id')
                    ->on('showths')
                    ->cascadeOnDelete();
            });
        }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatar_showths');
    }
};
