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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('slug');
            $table->longText('details');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

<<<<<<< HEAD
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascad');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

=======
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascad');
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
