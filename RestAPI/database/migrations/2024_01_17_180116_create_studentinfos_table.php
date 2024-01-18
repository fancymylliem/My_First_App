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
        Schema::create('studentinfos', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',30)->nullable();
            $table->string('lastname',30)->nullable();
            $table->string('middle_name',30)->nullable();
            $table->string('mobile',10)->unique();
            $table->string('email',70)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentinfos');
    }
};
