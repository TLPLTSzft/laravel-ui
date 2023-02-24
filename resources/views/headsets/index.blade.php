@extends('layouts.app')

@section('title')
    Headsets
@endsection

@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>brand</th>
                    <th>connection</th>
                    <th>priceUSD</th>
                    <th>making</th>
                </tr>
            </thead>

            <body>
                @foreach ($headsets as $headset)
                    <tr>
                        <td>{{ $headset->id }}</td>
                        <td>{{ $headset->brand }}</td>
                        <td>{{ $headset->connection }}</td>
                        <td>{{ $headset->priceUSD }}</td>
                        <td>{{ $headset->making }}</td>
                    </tr>
                @endforeach
            </body>

        </table>
    </div>
@endsection
