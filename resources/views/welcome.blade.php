    @extends('layout')
    @section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">Húzások</h1>
        <p class="fs-4">
            Válassz egy évet:
        </p>
        <p class="fs-4">
            @foreach ($result as $sv)
            <a class="btn btn-primary fs-2 mb-2" href="/ev/{{$sv->ev}}">{{$sv->ev}}</a>
            @endforeach
        </p>
    </div>
    @endsection
