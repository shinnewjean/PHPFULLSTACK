
{{-- 상속 --}}
@extends('layout.layout')

{{-- 부모템플릿에 해당하는 yield부분에 자리를 차지 --}}
@section('title', '자식타이틀')

{{-- 처리해야하는 코드가 많을 경우에는, @section~@endsection 에 소스코드 기재 --}}
@section('contents')
    <h1>콘텐츠 영역입니다.</h1>
    <h2>...</h2>
    <h3>콘텐츠 끝</h3>
@endsection

{{-- 자식 템플릿에 해당 section이 정의 되어 있지 않으면 부모의 것이 실행 --}}
@section('test')
    <h2>자식의 섹션입니다</h2>
    <p>...</p>
@endsection

{{-- 조건문 --}}
@section('if')
    <hr>
    <h1>IF</h1>
    @if($data['gender'] === '남자')
    <span>남자입니다.</span>
    @elseif($data['addr'] === '대구')
        <span>대구입니다.</span>
    @else
        <span>모든 조건 탈락</span>
    @endif
@endsection

{{-- 반목문 --}}
@section('for')
    <hr>
    <h1>FOR</h1>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

{{-- foreach와 forelse의 경우, $loop변수가 생성되고 사용할수있다. --}}
@section('foreach')
    <hr>
    <h1>FOREACH</h1>
    @foreach($data as $key => $value)
        <span>{{$loop->count.' >> '.$loop->iteration}}</span>
        <span>{{$key.':'.$value}}</span>
        <br>
    @endforeach
@endsection


@section('forelse')
    <hr>
    <h1>FORELSE</h1>
    @forelse($data2 as $key => $value)
        <span>{{$key.':'.$value}}</span>
        <br>
    @empty
        <span>비어있는값</span>
    @endforelse
@endsection