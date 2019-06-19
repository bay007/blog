<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('article_tag', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->biginteger('article_id')->unsigned();
            $table->biginteger('tag_id')->unsigned();

            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles')->ondelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
