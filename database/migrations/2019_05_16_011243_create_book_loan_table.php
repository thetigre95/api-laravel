<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookLoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_loan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id','fk_book_loan_user')->references('id')->on('user')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id','fk_book_loan_book')->references('id')->on('book')->onDelete('restrict')->onUpdate('restrict');
            $table->date('loan_date');
            $table->string('loan_to',100);
            $table->boolean('status');
            $table->date('return_date')->nullable();
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
        Schema::dropIfExists('book_loan');
    }
}
