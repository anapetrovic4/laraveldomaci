<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PreimenujKolonuTabelaSobas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sobas', function (Blueprint $table) {
          
            $table->renameColumn('broj_ljudi','kapacitet');
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sobas', function (Blueprint $table) {
          
            $table->renameColumn('kapacitet','broj_ljudi');
           
            
        });
    }
}
