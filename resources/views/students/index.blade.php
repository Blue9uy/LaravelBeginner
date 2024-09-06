@extends('layout.app')
@section('content')
    <h2>Students Lists</h2>
    <p>Oldest Age: {{$students->avg('age')}}</p>
    <p>Student count: {{$students->count()}}</p>
    <ul>
        @foreach ($students as $student)
            <li><div class="item">
                <p>Name : {{$student ->name}}</p>
                <p>Remark : {{$student ->remark}}</p>
                <p>Age : {{$student ->age}}</p>
                <a href="/students/{{$student->id}}">More Info</a>
                <a href="/students/trash/{{$student->id}}">Move to trash</a>
                <a href="/students/forcedelete/{{$student->id}}">Force Delete</a>
                </div></li>

        @endforeach
    </ul>
@endsection
