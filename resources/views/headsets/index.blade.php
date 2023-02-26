@extends('layouts.app')

@section('title')
    Headsets
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Headsets</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand</th>
                            <th>Connection</th>
                            <th>PriceUSD</th>
                            <th>Making</th>
                            <th>Operation</th>
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
                                <td>
                                    <a href="{{ route('headsets.show', $headset->id) }}"
                                        class="btn btn-outline-secondary">Details</a>
                                    <a href="{{ route('headsets.edit', $headset->id) }}"
                                        class="btn btn-outline-secondary">Edit</a>
                                    @include('headsets.delete', ['headset' => $headset])
                                </td>
                            </tr>
                        @endforeach
                    </body>

                </table>
            </div>
        </div>
    </div>
@endsection
