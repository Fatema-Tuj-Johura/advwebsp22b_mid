@extends('layouts.loggedin')
@section('content')
<h1>list of students</h1>
<html>
    <head></head>
    <body>

<table border="1">
    <tr>
    <th>Name</th>
    <th>ID</th>
    <th>DEPT</th>
    </tr>
    @foreach($students as $s)
    <tr>
        <td><a href="{{route('student.details',['id'=>$s->id,'name'=>$s->name])}}">{{$s->name}}</td>
        <td> {{$s->id}} </td>
        <td> {{$s->dept}} </td>
    </tr>
    @endforeach
</table>
        
</body>
</html>
@endsection