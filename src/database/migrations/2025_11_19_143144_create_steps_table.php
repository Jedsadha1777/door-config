<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('step_key', 50);
            $table->string('step_name');
            $table->integer('step_number');
            $table->string('template', 50)->default('grid');
            $table->timestamps();
            $table->unique(['product_id', 'step_key']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('steps');
    }
};
