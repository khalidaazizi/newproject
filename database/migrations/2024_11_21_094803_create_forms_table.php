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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->integer('age');
            $table->string('email');
            $table->string('password');
            $table->string('phoneNumber');
            $table->date('birthday');
            $table->date('dead_day');
            $table->enum('gender',['male','female' ]);
            $table->text('address');
            // $table->text('files');
            // $table->string('image');
            $table->string('country');
            $table->text('experience');
            $table->boolean('terms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
