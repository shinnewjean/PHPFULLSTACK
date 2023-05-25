<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //----------------
        // 쿼리 빌더
        //----------------
        // $result = DB::select('select * from categories');
        // $no = '5'; 
        // $result = DB::select('select * from categories where no = :no'
        // , ['no' => $no]
        // );
        // $result = DB::select('select * from categories where no = ? and no = ?'
        // , [$no, 7]
        // );
        $input = ['4', '7', '8']; // categories의 no 컬럼
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개만)

        // $result = DB::select(
            // 'SELECT b.bno,b.btitle,c.name FROM categories c INNER JOIN boards b ON b.category = c.no WHERE c.no=? OR c.no=? OR c.no=? ORDER BY b.bno ASC LIMIT 5'
            // 'SELECT b.bno,b.btitle,c.name FROM categories c,boards b WHERE c.no = b.category AND c.no IN(?,?,?) ORDER BY b.bno LIMIT 5'
            // , [$input[0], $input[1],$input[2]]
            // ,$input
        // );

        // $result = DB::insert(
        //     'insert into boards(category, btitle, bcontent, created_at, updated_at)
        //     values(:category, :btitle, :bcontent, :created_at, :updated_at )'
        //     ,
        //     [
        //         'category' => '5'
        //         ,'btitle' => '제목'
        //         ,'bcontent' => '콘텐츠'
        //         ,'created_at' => now()
        //         ,'updated_at' => now()
        //     ]
        // );

        // 방금 등록한 게시글의 제목(test), 내용(testtest)로 변경해주세요.
        // $result = DB::update(
        //     'UPDATE boards SET btitle =:btitle , bcontent = :bcontent, updated_at= :updated_at WHERE bno=:bno)
        //     ,
        //     [
        //         'btitle' => 'test'
        //         ,'bcontent' => 'testtest'
        //         ,'updated_at' => '콘텐츠'
        //     ]
        // );

        // delete
        // $result = DB::delete('delete from boards where bno in(?,?,?)', [2001,19,20]);

        //----------------
        // 쿼리 빌더 체이닝(Eloquent ORM)
        //----------------
        $no = '5';
        // $result = DB::table('categories')->where('no','=',$no)->get();
        // $result = DB::table('categories')->where('no','=',$no)->dd(); // to do : 삭제예정
            // $result = DB::select(
            // 'select * from categories where no = :no'
            // , ['no' => $no]
            // );
        
        // select * from categories where no = ? or no = ?
        $no1 = '5';
        $no2 = 8;
        // $result = DB::table('categories')->where('no',$no1)->orwhere('no',$no2)->get();

        // select * from categories where no in(?,?)
        // $result = DB::table('categories')->whereIn('no',[$no1,$no2])->get();

        // select * from categories where no not in('5','8')
        // $result = DB::table('categories')->whereNotIn('no',[$no1,$no2])->dd();

        // select id,no,name from categories
        // $result = DB::table('categories')
        //     ->select('id','no','name')
        //     ->dd();
        
        // select id,no,name from categories order by name desc
        // $result = DB::table('categories')
        // ->select('id','no','name')
        // ->orderBy('name','desc')
        // ->get();

        // select * from categories where no = ? and no = ?
        // $result = DB::table('categories')->where('no',$no1)->where('no',$no2)->get();

        // ***주의해서 사용*** whereRaw()
        // $result = DB::table('categories')->whereRaw('no = '.$no1);

        // first() : limit 1 , 실패시 false 리턴
        // $result = DB::table('boards')->orderBy('bno','desc')->first();

        // firstOrFail() : first() 같은 동작, 실패시 결과가 예외 발생(엘로퀀트(Laravel의 ORM) 모델 객체에서만 사용가능)
        // $result = DB::table('boards')->orderBy('bno','desc')->firstOrFail();
        // board::firstOrFail();

        // 집계 메소드
        // $result = DB::table('boards')->count(); // 결과의 레코드수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환
        // $result = DB::table('boards')->min('bno');
        // $result = DB::table('boards')->avg('bno');
        // $result = DB::table('boards')->sum('bno');

        // 트랜잭션
        // DB::beginTransaction(); //트랜잭션 시작
        // DB::rollback(); //롤백
        // DB::commit(); // 커밋

        // 카테고리가 활성화 되어있는(1) 게시글의 카테고리 별 갯수를 출력해주세요.
        // 카테고리 벙호, 명 , 갯수

        // $result = DB::select(
            // "SELECT b.category, c.name, count(c.name) FROM boards b, categories c WHERE c.no = b.category AND c.active_flg = '1' GROUP BY b.category, c.name"
        // );

        $result = DB::table('categories as c')
            ->join('boards as b','c.no','=','b.category')
            ->select('b.category','c.name', DB::raw('count(c.name)'))
            ->where('c.active_flg','=','1')
            ->groupBy('b.category', 'c.name')
            ->get();
        return var_dump($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
