<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // 모델 생성 : php artisan make:model Board -mfs
    // 옵션으로 migration, factory, seeder를 한번에 생성

    // 테이블 정의 (정의하지 않을 경우에는 클래스 명의 복수형을 암묵적으로 인식)
    protected $table = 'boards';

    // PK 정의 (정의하지 않을 경우에는 id 컬럼을 PK로 인식)
    protected $primaryKey = 'id';

    // // 대량 할당을 이용한 취약성 대책 _ 둘중 하나만 사용가능
    // // 1. 화이트 리스트 방식 : 수정 할수있는 컬럼을 설정
    // protected $fillable = ['컬럼1','컬럼2'];
    // // 2. 블랙 리스트 방식 : 수정 할수없는 컬럼을 설정
    protected $guarded = [];
}
