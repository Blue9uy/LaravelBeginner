@extends('layout.app')
@section('content')
   <li><div class="item">
    <p>Name : {{$student ->name}}</p>
    <p>Remark : {{$student ->remark}}</p>
    <p>Age : {{$student ->age}}</p>
                </div></li>
@endsection
