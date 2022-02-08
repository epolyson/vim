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
        Schema::create('posts', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title',50);
            $table->string('body',200);
            $table->timestamp('created_at',0)->useCurrent();
            $table->timestamp('updated_at',0)->useCurrent();
            $table->timestamp('deleted_at',0)->nullable();
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
