    @extends('layout')
    @section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">Húzások</h1>
        <p class="fs-4">Az adatok csak 1998-tól ismertek!</p>
        <table class="table table-striped table-bordered">
            <tr>
                <th>#</th>
                <th>Év</th>
                <th>Hét</th>
                <th>Darab</th>
                <th>HUF</th>
            </tr>
            @foreach ($result as $row)
            <tr>
                <td>{{$sv++ }}</td>
                <td>{{$row->ev}}</td>
                <td>{{$row->het}}</td>
                <td>{{$row->darab}}</td>
                <td>{{number_format($row->talalat5_huf,0,',',' ')}} Ft</td>
            </tr>

            @endforeach
        </table>
    </div>
    @endsection
