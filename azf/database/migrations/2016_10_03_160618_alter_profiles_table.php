<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('propietarios', function (Blueprint $table) {
            $table->string('id_usuario');
            $table->string('nombre');
            $table->string('ap_pat');
            $table->string('ap_mat');
            $table->string('tel');
            $table->string('priv');
            $table->dropColumn('prop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propietarios', function (Blueprint $table) {
            //
        });
    }
}
