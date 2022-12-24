<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('enname');
            $table->string('website');
            $table->text('address');
            $table->string('fjur');
            $table->string('propentre');
            $table->string('typeentreprise');
            $table->string('typeact');
            $table->string('domact');
            $table->string('secact');
            $table->string('rnd');
            $table->string('compsc');
            $table->text('problems');
            $table->text('remarques');
            $table->text('desc');
            $table->string('validated')->default('Non');
            $table->string('created_by');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
};
