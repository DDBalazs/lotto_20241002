@extends('layout')
@section('content')
<div class="container py-3">
    <h1 class="text-center display-5">Húzások - {{$ev}}</h1>
    <p class="fs-4">
        Válassz egy hetet, hogy megnézd a húzás adatait:
    </p>
    <p class="fs-4">
        @foreach ($result as $sv)
        <a class="btn btn-primary fs-2 mb-2" href="/adatlap/{{$sv->id}}">{{$sv->het}}. hét</a>
        @endforeach
    </p>
</div>
@endsection
