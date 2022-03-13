<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_works', function (Blueprint $table) {
            $table->id();
            $table->integer('week_id');
            $table->integer('supervisor_id');
            $table->text('activities');
            $table->string('communicate_with_leaders');
            $table->string('leaders_didnt_enter_withdraw');
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
        Schema::dropIfExists('extra_works');
    }
}
