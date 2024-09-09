@extends('layouts.app')
@section('content')

@foreach ($people as $p)
    <ul>
        <li>
            Name: {{$p->name}}
            <br>
            Address: {{$p->address}}
            <br>
            NRC: {{$p->nrc->type}} {{$p->nrc->number}}
        </li>
    </ul>
@endforeach
<hr>
@foreach ($nrc as $n)
    <ul>
        <li>
            Name: {{$n->people->name}}
            <br>
            Address: {{$n->people->address}}
            <br>
            NRC: {{$n->type}} {{$n->number}}
        </li>
    </ul>
@endforeach
<hr>
@endsection
