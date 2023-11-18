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
        Schema::create('tuition_posts', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);// creating table feild with the name property of the form
            $table->string('role');
            $table->string('email');
            $table->string('class_list',15); 
            $table->string('subject_name',30);
            $table->string('contact');
            $table->string('address',30);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuition_posts');
    }
};
