@extends('layouts.app')

@section('title')
    Headsets
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $headset->id . ' - ' . $headset->brand }}</h4>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }} <br>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <td>{{ $headset->id }}</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>{{ $headset->brand }}</td>
                                </tr>
                                <tr>
                                    <th>Connection</th>
                                    <td>{{ $headset->connection }}</td>
                                </tr>
                                <tr>
                                    <th>USD</th>
                                    <td>{{ $headset->priceUSD }}</td>
                                </tr>
                                <tr>
                                    <th>Making</th>
                                    <td>{{ str_replace('-', '. ', $headset->making) . '.' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('headsets.edit', $headset->id) }}" class="btn btn-outline-secondary">Edit</a>
                        @include('headsets.delete', ['headset' => $headset])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
