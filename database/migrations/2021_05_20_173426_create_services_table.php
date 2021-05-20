<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('created_from')->nullable();
            $table->string('description')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('currency')->nullable();
            $table->integer('purchase')->unsigned()->nullable();
            $table->integer('edited_purchase')->unsigned()->nullable();
            $table->string('Offered_by')->nullable();
            $table->integer('creatted_by')->unsigned()->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
