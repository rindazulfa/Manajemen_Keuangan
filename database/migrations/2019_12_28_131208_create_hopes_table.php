<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cost');
            $table->string('month');
            $table->string('inflation');
            $table->string('per_month');
            $table->string('upcoming_costs');
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
        Schema::dropIfExists('hopes');
    }
}
