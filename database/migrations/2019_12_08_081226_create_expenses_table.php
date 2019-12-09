<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('date');
            $table->bigInteger('expense_categories_id')->unsigned();
            $table->string('to');
            $table->integer('total');
            $table->bigInteger('methods_id')->unsigned();
            $table->longText('description');
            $table->timestamps();

            $table->foreign('expense_categories_id')
            ->references('id')
            ->on('expense_categories')
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
        Schema::dropIfExists('expenses');
    }
}
