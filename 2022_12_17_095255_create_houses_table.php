<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string("City")->nullable();
            $table->integer("Area")->nullable();
            $table->string("Purpose")->nullable();
            $table->string("Property_Type")->nullable();
            $table->double("Price")->nullable();
            $table->integer("Floor")->nullable();
            $table->integer("Bedroom")->nullable();
            $table->string("Image")->nullable();
            $table->longtext("Description")->nullable();
            $table->string("PostedBy")->nullable();
            
        
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
        Schema::dropIfExists('houses');
    }
}
