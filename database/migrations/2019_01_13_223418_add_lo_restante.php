<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLoRestante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {

        $table->integer('telefono')->unique()->after('rut');
        $table->integer('tipo_usuario')->unique()->after('id');




        }); //

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn('telefono');
            $table->dropColumn('tipo_usuario');
        
        
        });
    }
}
