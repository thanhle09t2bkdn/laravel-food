<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatefoodsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->integer('category_id')->unsigned();
            $table->text('content');
            $table->integer('author')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')
                    ->references('id')->on('categories')
                    ->onDelete('cascade');
            $table->foreign('author')
                    ->references('id')->on('users')
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
        Schema::drop('foods');
    }
}
