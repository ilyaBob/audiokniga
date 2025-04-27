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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Название');
            $table->string('slug');
            $table->unsignedBigInteger('image_id');
            $table->text('description')->comment('Описание');
            $table->boolean('is_active')->default(false)->comment('Активный');
            $table->integer('age')->nullable()->comment('Год');
            $table->string('time')->comment('Время');
            $table->integer('cycle_number')->nullable()->comment('Номер в цикле');

            $table->foreignId('cycle_id')->nullable()->comment('Номер в цикле')->constrained('cycles');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
