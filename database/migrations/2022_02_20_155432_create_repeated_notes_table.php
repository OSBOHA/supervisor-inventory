<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepeatedNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repeated_notes', function (Blueprint $table) {
            $table->id();
            $table->string('supervisor_id');
            $table->integer('week_id');
            $table->text('didnt_publish_news')->nullable();
            $table->string('post_late')->nullable();
            $table->string('elementary_marks_late')->nullable();
            $table->string('deputized_for')->nullable();
            $table->string('light_week')->nullable();

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
        Schema::dropIfExists('repeated_notes');
    }
}
