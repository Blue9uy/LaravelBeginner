@extends('layout.app')
@section('content')
    <h2>Students Lists</h2>
    <ul>
        @foreach ($students as $student)
            <li><div class="item">
                <p>Name : {{$student ->name}}</p>
                <p>Remark : {{$student ->remark}}</p>
                <p>Age : {{$student ->age}}</p>
                <a href="/students/trash/data/restore/{{$student->id}}">Restore</a>

                </div></li>

        @endforeach
    </ul>
@endsection