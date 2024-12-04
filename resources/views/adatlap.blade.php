@extends('layout')
@section('content')
<div class="container py-3">
    <h1 class="text-center display-5">{{$result->ev}} - {{$result->het}}</h1>
    <div class="row">
        <div class="col-md">
            <p class="fs-4">
                Az Ötös lottó nyerőszámai: <br>
                {{$result->szam1}},
                {{$result->szam2}},
                {{$result->szam3}},
                {{$result->szam4}},
                {{$result->szam5}}
            </p>
        </div>
        <div class="col-md">
            @if ($result->talalat2_db>0)
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Darab</th>
                        <th>HUF</th>
                    </tr>
                    <tr>
                        <td>Öt találatos</td>
                        <td>{{$result->talalat5_db}}</td>
                        <td>{{number_format($result->talalat5_huf,0,',',' ')}} Ft</td>
                    </tr>
                    <tr>
                        <td>Négy találatos</td>
                        <td>{{$result->talalat4_db}}</td>
                        <td>{{number_format($result->talalat5_huf,0,',',' ')}} Ft</td>
                    </tr>
                    <tr>
                        <td>Három találatos</td>
                        <td>{{$result->talalat3_db}}</td>
                        <td>{{number_format($result->talalat5_huf,0,',',' ')}} Ft</td>
                    </tr>
                    <tr>
                        <td>Kettő találatos</td>
                        <td>{{$result->talalat2_db}}</td>
                        <td>{{number_format($result->talalat5_huf,0,',',' ')}} Ft</td>
                    </tr>
                </table>
            @else
                <p class="fs-4">A nyereményekrl nincs adat...</p>
            @endif
        </div>

    </div>
</div>
@endsection
