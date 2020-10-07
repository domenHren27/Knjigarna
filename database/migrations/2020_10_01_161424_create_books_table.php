<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('avtor', 100);
            $table->string('naslov', 100);
            $table->string('vrsta_gradiva', 100);
            $table->string('jezik');
            $table->integer('leto');
            $table->string('zaloznistvo_izdelava', 100);
            $table->string('fizicni_opis', 100);
            $table->string('drugi_avtorji', 100);
            $table->bigInteger('isbn')->unique();
            $table->bigInteger('udk')->unique();
            $table->bigInteger('cobis_id');
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
        Schema::dropIfExists('books');
    }
}
