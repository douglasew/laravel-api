<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumns extends Migration
{
    
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
            $table->string('email',120)->unique()->change();
            $table->string('cpf',11);
            $table->string('rg');

        });
    }

    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
            $table->string('email',120)->unique()->change();
            $table->string('cpf',11);
            $table->string('rg');
        });
    }
}
