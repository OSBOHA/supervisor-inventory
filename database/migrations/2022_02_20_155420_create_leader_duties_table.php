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
            $table->integer('supervisor_id');
            $table->integer('current_team_members');
            $table->double('team_final_mark', 5, 2);
            $table->text('follow_up_post');
            $table->text('support_post');
            $table->string('news');
            $table->text('elementary_mark');
            $table->string('final_mark');
            $table->string('leader_reading');
            $table->text('audit_final_mark');
            $table->string('withdrawn_ambassadors');
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
