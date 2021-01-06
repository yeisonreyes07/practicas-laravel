<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePost2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post2s', function (Blueprint $table) {
            $table->bigIncrements(column: 'id');

            $table->unsignedBigInteger(column: "user_id");

            $table->foreign(columns: "user_id")->references(columns: "id")->on(table: "users");

            $table->unsignedBigInteger(column:"blog_id");

            $table->foreign(columns: "blog_id")->references(columns: "id")->on(table: "blogs");

            $table->string( column:"title");

            $table->text( column:"content");

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
        Schema::dropIfExists('post2s');
    }
}
