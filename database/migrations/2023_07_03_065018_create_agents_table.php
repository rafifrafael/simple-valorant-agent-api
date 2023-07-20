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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('real_name');
            $table->string('codename');
            $table->string('origin');
            $table->string('race');
            $table->string('gender');
            $table->string('role');
            $table->string('basic_abilities_1');
            $table->string('basic_abilities_2');
            $table->string('signature_abilities');
            $table->string('ultimate_ability');
            $table->integer('ult_points');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
