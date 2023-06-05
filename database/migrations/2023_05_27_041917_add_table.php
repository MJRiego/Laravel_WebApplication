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

        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->integer('memberID');
            $table->string('yearlevel');
            $table->string('semester');
            $table->string('course');
            $table->string('code');
            $table->integer('unit');
            $table->decimal('grades');
            $table->timestamps();
        });

        Schema::table('grades', function (Blueprint $table) {
            $table->renameColumn('id','gradeID');
            
        });

        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->integer('memberID');
            $table->integer('reqs_listID');
            $table->date('date');
            $table->timestamps();
        });

        Schema::table('requirements', function (Blueprint $table) {
            $table->renameColumn('id','reqsID');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
