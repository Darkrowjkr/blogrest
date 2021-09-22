<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('user', 20);
            $table->integer('topics_id')->unsigned();
            //$table->foreignId('topics_id')->constrained();
            $table->string('mensaje');
            //$table->text('mensaje');   tipo de dato para gigabytes de información en texto
            $table->timestamps();
            //$table->date('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
