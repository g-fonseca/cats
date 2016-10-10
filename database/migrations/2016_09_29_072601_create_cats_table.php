<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('name');

            $table->string('weight')->nullable();
            $table->string('photo')->nullable();
            $table->text('description')->nullable();

            $table->enum('color', [
                "black",
                "white",
                "grey"
            ])->nullable();

            $table->tinyInteger('active')->nullable()->default(1);
            
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
        Schema::dropIfExists('cats');
    }
}
