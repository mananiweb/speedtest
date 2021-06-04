<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInernetSpeedDatasTable extends Migration
{
    public function up()
    {
        Schema::create('inernet_speed_datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip')->nullable();
            $table->string('dl')->nullable();
            $table->string('upload')->nullable();
            $table->string('ping')->nullable();
            $table->string('jitter')->nullable();
            $table->string('ispinfo')->nullable();
            $table->string('ua')->nullable();
            $table->string('lang')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
