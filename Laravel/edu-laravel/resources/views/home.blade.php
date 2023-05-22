<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOME</h1>
    <br><br><br><br>
    <form action="/method" method='post'>
        <!-- CSRF 공격(Cross Site Request Forgery) : 폼안에 꼭적어줘야된다 -->
        <!-- 공격대응이 되지않아서 라라벨에서 막음 -->
        @csrf
        <button type="submit">POST</button>
    </form>

    <form action="/method" method='post'>
        @csrf
        @method('PUT')
        <button type="submit">PUT</button>
    </form>

    <form action="/method" method='post'>
        @csrf
        @method('DELETE')
        <button type="submit">DEL</button>
    </form>

    <form action="/method" method='post'>
        @csrf
        <button type="submit">POST</button>
    </form>
</body>
</html>