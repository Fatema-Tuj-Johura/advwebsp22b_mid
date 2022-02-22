@extends('layouts.loggedin')
@section('content')
<h1>get</h1>
<h4>Name: {{$name}} </h4>
<h4>ID: {{$id}} </h4>

<ol>
   @for($i=0;$i<count($courses);$i++)
   <li> {{$courses[$i]}} </li>
   @endfor
</ol>

<ul>
    @foreach($courses as $c)
    <li> {{$c}} </li>
    @endforeach
</ul>
@endsection