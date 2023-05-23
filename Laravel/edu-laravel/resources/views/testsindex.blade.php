<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tests.index!!</h1>
    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index')}}">Tasks.index!!</a>
    <br>
    <a href="{{route('tasks.show',['task'=>13])}}">Tasks.show!!</a>
    <form action="{{route('tasks.update',['task'=>1])}}" method="post">
{{-- PUT|PATCH       tasks/{task} ............ tasks.update › TasksController@update  --}}
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="php506">
    <input type="hidden" name="pw" value="506">
    <input type="hidden" name="name" value="admin">
    <button type="submit">tasks.update</button>
    </form>
    <hr>

    {{-- <form action="{{route('tasks.edit',['task'=>999])}}" method="get"></form> --}}
    <a href="{{route('tasks.edit',['task'=>999])}}">Tasks.edit!!</a>
    <form action="{{route('tasks.store')}}" method="post">
    @csrf
    @method('post')
    <input type="text" name="id" value="">
    <input type="text" name="pw" value="">
    <button type="submit">tasks.store</button>
    </form>

    <hr>
    

</body>
</html>