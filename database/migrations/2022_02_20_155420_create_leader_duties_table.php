<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaderDutiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leader_duties', function (Blueprint $table) {
            $table->id();
            $table->integer('leader_id');
            $table->integer('week_id');
            $table->string('follow_up_post');
            $table->string('support_post');
            $table->string('news');
            $table->string('elementary_mark');
            $table->string('final_mark');
            $table->string('audit_final_mark');
            $table->string('withdrawn_ambassadors');
            $table->string('leader_reading');
            $table->double('team_final_mark',3, 2);
            $table->integer('current_team_members');

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
        Schema::dropIfExists('leader_duties');
    }
}
