<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tlds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Example: .com, .net, etc..');
            $table->double('price',[12, 2]);
            $table->boolean('status')->default(true)->comment('1-Active, 2-Inactive');
            $table->softDeletes();
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
        Schema::dropIfExists('tlds');
    }
}
