<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
			if(!Schema::hasTable('topics')){
            	$table->increments('id');
				$table->string('title')->index()->comment('title');
				$table->text('body')->comment('content');
				$table->integer('user_id')->index()->unsigned();
				$table->integer('category_id')->index()->unsigned();
				$table->integer('reply_count')->index()->unsigned()->default(0);
				$table->integer('view_count')->index()->unsigned()->default(0);
				$table->integer('last_reply_user_id')->index()->unsigned()->default(0);
				$table->integer('order')->default(0);
				$table->text('excerpt')->nullable()->comment('seo description`');
				$table->string('slug')->nullable()->comment('seo url');
            	$table->timestamps();
			}
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
