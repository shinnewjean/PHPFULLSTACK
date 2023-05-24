<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성 : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate
    // migration 리셋(모든 migration 파일의 down()메소드를 실행) : php artisan migrate:reset
    // migration 롤백(가장 마지막에 실행한 migration의 내용을 롤백 ) : php artisan migrate:rollback

    // 시더 (초기 데이터 생성) : database\seeders의 각 클래스 파일 확인

    // 팩토리 (더미 데이터 생성) : database\factories의 각 클래스 파일 확인
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            // id(pk,auto_increment) ,no(unique,char(1)) ,name(unique,varchar(30)) ,active_flg(default('1'),char(1))
            $table->id();
            $table->char('no', 1)->unique();
            $table->string('name', 30)->unique();
            $table->char('active_flg',1)->default('1'); 
        });
    }

    // USE edu_laravel;

    // CREATE TABLE Categories (
    //     id BIGINT->INT PRIMARY KEY AUTO_INCREMENT
    //     ,no CHAR(1) NOT NULL UNIQUE
    //     ,name	VARCHAR(30)	NOT NULL UNIQUE
    //     ,active_flg	CHAR(1) NOT NULL DEFAULT '1'
    // );


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
