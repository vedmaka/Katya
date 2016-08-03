<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVkEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vk_events', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('type');
	        $table->integer('group_id');
	        $table->integer('post_id');
	        $table->integer('from_id');
	        $table->integer('date_unix');
	        $table->text('text');
	        $table->string('post_type');
	        $table->integer('signer_id');
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
        Schema::drop('vk_events');
    }
}
