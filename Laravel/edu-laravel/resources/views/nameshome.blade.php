<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>names home</title>
</head>
<body>
    <a href="/names">names</a><br><br>

    <!-- 블레이드 템플릿 php의 echo 기능 -->
    <a href="{{url('/names');}}">names</a><br><br>

    <!-- 별칭 지정한것으로 했기때문에 이름을바꿔도 수정사용에 용이함 -->
    <a href="{{route('names.index');}}">names</a><br><br> {{-- 라라벨에서 추천하는 방식 --}}
</body>
</html>