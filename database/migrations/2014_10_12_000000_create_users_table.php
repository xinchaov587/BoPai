<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('主键ID');
            $table->string('username')->comment('用户登录账号');
            $table->string('password')->comment('用户登录面');
            $table->string('headimg')->comment('用户头像');
            $table->string('nickname')->comment('用户昵称');
            $table->string('payment')->comment('支付密码');
            $table->string('third_payment')->comment('第三方绑定');
            $table->decimal('balance',11, 2)->comment('用户余额');
            $table->string('tel')->comment('用户唯一手机号');
            $table->rememberToken()->comment('用于记住用户');
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
        Schema::dropIfExists('users');
    }
}
