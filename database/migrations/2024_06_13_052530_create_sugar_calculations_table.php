<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSugarCalculationsTable extends Migration
{
    public function up()
    {
        Schema::create('sugar_calculations', function (Blueprint $table) {
            $table->id();
            $table->float('gula');
            $table->float('takaran_saji');
            $table->float('sajian_per_kemasan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sugar_calculations');
    }
}

