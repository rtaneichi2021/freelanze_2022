<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('role_id')->default(0)->comment('0:一般会員 1:クリエイター 2:管理者');
                $table->string('name');
                $table->string('name_hurigana')->nullable();
                $table->string('creator_name')->nullable();
                $table->string('email');
                $table->string('password');
                $table->bigInteger('tel')->nullable();
                $table->date('birthday')->nullable();
                $table->integer('gender')->nullable()->comment('0:男性, 1:女性, 2:どちらでもない');
                $table->string('post_code')->nullable();
                $table->integer('prefecture_id')->nullable();
                $table->string('address')->nullable();
                $table->string('building')->nullable();
                $table->text('icon_image_path')->nullable();
                $table->text('profile')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
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
