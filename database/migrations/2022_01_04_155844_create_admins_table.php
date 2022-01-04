<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username', 12)->comment('用户名')->unique();
            $table->string('password', 64)->comment('密码');
            $table->string('real_name', 20)->comment('真实姓名')->nullable();
            $table->string('phone', 20)->comment('手机号码')->nullable();
            $table->float('weight')->comment('体重')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
