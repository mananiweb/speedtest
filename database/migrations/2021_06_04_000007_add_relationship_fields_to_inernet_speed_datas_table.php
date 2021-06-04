<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInernetSpeedDatasTable extends Migration
{
    public function up()
    {
        Schema::table('inernet_speed_datas', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_4085862')->references('id')->on('users');
        });
    }
}
