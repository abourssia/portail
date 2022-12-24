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
        Schema::create('laboratoires', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('intitule');
            $table->string('region');
            $table->string('wilaya');
            $table->string('etablissement');
            $table->string('gdomainelabo');
            $table->string('domaine');
            $table->string('acronyme');
            $table->string('directeur');
            $table->string('emaildirec');
            $table->string('numdirec');
            $table->string('desclabo');
            $table->string('keywordslabo');
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
        Schema::dropIfExists('laboratoires');
    }
};
