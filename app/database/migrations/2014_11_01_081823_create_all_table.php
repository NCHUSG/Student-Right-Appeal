<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//  申訴表單table
		Schema::create('appeal',function($table)
		{
			$table->increments('id')->unsigned();							//id,unsigned,
			$table->integer('user_id')->unsigned();							//使用者ID,unsigned
			$table->tinyInteger('department')->unsigned();					//系,unsigned
			$table->tinyInteger('grade')->unsigned();						//年級,unsigned
			$table->string('title',50);										//標題，限50字內
			$table->text('content');										//內容
			$table->bigInteger('post_time');								//時間
			$table->tinyInteger('process')->unsigned()->default(0);			//目前處理狀態,unsigned,預設值為0
			$table->tinyInteger('subscribe_num')->unsigned()->default(0);	//訂閱人數,unsigned,預設值為0
			$table->tinyInteger('reply_num')->unsigned()->default(0);		//回覆數,unsigned,預設值為0
			$table->boolean('public');										//公/不公開
			$table->boolean('visible');										//可/不可在前端顯示
		});

		//  回覆table
		Schema::create('reply',function($table)
		{
			$table->increments('id')->unsigned();							//id,unsigned
			$table->integer('appeal_id')->unsigned()->index();				//申訴表單ID,unsigned
			$table->integer('user_id')->unsigned()->index();				//使用者ID,unsigned
			$table->text('content');										//內容
			$table->bigInteger('post_time');								//時間
			$table->boolean('visible');										//可/不可在前端顯示
		});

		//  訂閱table
		Schema::create('subscribe',function($table)
		{
			$table->increments('id')->unsigned();							//id,unsigned
			$table->integer('user_id')->unsigned()->index();				//使用者ID,unsigned
			$table->integer('appeal_id')->unsigned()->index();				//申訴表單ID,unsigned
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
