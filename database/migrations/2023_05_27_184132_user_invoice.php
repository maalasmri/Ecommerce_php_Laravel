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
        Schema::create('user_invoice', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->integer('Phone');
            $table->timestamp('Date');
            $table->string('country');
            $table->string('City');
            $table->string('Street');
            $table->string('ProductName');
            $table->double('Total');
            $table->string('Img');
            $table->string('Color');
            $table->string('Specifications');
            $table->double('Tax');
            $table->double('Price');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
