<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIznajmljivanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iznajmljivanjes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gost_id');
            $table->foreignId('soba_id');
            $table->string('datum_od');
            $table->string('datum_do');


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
        Schema::dropIfExists('iznajmljivanjes');
    }
}
