<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fact_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->integer('fact_number')->nullable();
            $table->unique(['fact_id', 'locale']);
            $table->foreign('fact_id')->references('id')->on('facts')->onDelete('cascade');
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
        Schema::dropIfExists('fact_translations');
    }
}
