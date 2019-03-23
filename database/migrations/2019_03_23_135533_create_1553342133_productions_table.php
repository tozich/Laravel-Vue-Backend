<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1553342133ProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('productions')) {
            Schema::create('productions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->string('description')->nullable();
                $table->string('link')->nullable();
                $table->string('start_date')->nullable();
                $table->string('end_date')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productions');
    }
}
