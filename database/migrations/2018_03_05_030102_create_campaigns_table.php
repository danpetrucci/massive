<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('type');
            $table->string('subject');
            $table->text('image_url');
            $table->text('image_link')->nullable();
            $table->text('footer')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
            $table->softDeletes();

            //Indexes

            $table->foreign('user_id')->references('id')->on('users');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('campaigns');
    }
}
