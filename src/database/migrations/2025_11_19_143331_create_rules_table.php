<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('if_step', 50);
            $table->string('if_option', 50);
            $table->string('then_step', 50);
            $table->json('block_options');
            $table->timestamps();
            $table->index(['if_step', 'if_option']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rules');
    }
};