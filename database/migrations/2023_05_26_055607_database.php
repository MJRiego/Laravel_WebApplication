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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('batchnum');
            $table->string('firstname');
            $table->string('midinitial');
            $table->string('lastname');
            $table->string('school');
            $table->string('college');
            $table->string('yearlevel');
            $table->string('program');
            $table->string('major');
            $table->date('acceptdate');
            $table->integer('age');
            $table->string('sex');
            $table->date('birthdate');
            $table->string('civilstatus');
            $table->string('religion');
            $table->bigInteger('mobile');
            $table->string('email');
            $table->string('address');
            $table->timestamps();
        });
        
        Schema::table('members', function (Blueprint $table) {
            $table->renameColumn('id','memberID');
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
