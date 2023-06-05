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
        Schema::create('allowances', function (Blueprint $table) {
            $table->id();
            $table->integer('memberID');
            $table->string('yearlevel');
            $table->string('semester');
            $table->date('month');
            $table->date('date_received');
            $table->timestamps();
        });

        Schema::table('allowances', function (Blueprint $table) {
            $table->renameColumn('id','allowanceID');
            
        });

        Schema::create('requirements_list', function (Blueprint $table) {
            $table->id();
            $table->string('requirements');
            $table->string('notes');
            $table->timestamps();
        });

        Schema::table('requirements_list', function (Blueprint $table) {
            $table->renameColumn('id','reqs_listID');
            
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
