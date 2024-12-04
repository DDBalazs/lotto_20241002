@extends('layout')
@section('content')
<div class="container py-3">
    <h1 class="text-center display-5"></h1>
    <p class="fs-4">
        Nyerőszám tippek: @for ($i = 0; $i<count($result)-1;$i++)
            {{$result[$i]}},
        @endfor
        {{$result[count($result)-1]}}
    </p>
</div>
@endsection
