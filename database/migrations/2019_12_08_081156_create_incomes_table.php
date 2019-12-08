<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('date');
            $table->bigInteger('income_categories_id')->unsigned();
            $table->string('from');
            $table->integer('total');
            $table->bigInteger('methods_id')->unsigned();
            $table->longText('description');
            $table->timestamps();

            $table->foreign('income_categories_id')
                ->references('id')
                ->on('income_categories')
                ->onDelete('cascade');

            $table->foreign('methods_id')
                ->references('id')
                ->on('methods')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
}
