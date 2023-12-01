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
        Schema::create('diabetes', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->foreignId('gender_id'); // TODO buat table lain
            $table->boolean('polyuria');
            $table->boolean('polydipsia');
            $table->boolean('sudden_weight_loss');
            $table->boolean('weakness');
            $table->boolean('polyphagia');
            $table->boolean('genital_thrush');
            $table->boolean('visual_blurring');
            $table->boolean('itching');
            $table->boolean('irritability');
            $table->boolean('delayed_healing');
            $table->boolean('partial_paresis');
            $table->boolean('muscle_stiffness');
            $table->boolean('alopecia');
            $table->boolean('obesity');
            $table->foreignId('result_id'); // TODO buat table lain
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diabetes');
    }
};
