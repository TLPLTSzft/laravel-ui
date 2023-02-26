@extends('layouts.app')

@section('title')
    Cats
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $cat->id . ' - ' . $cat->name }}</h4>
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
                                    <td>{{ $cat->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $cat->name }}</td>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <td>{{ $cat->age }}</td>
                                </tr>
                                <tr>
                                    <th>Tom_cat</th>
                                    <td>{{ $cat->tom_cat == 1 ? 'Yes' : 'No' }}</td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>{{ $cat->color }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-outline-secondary">Edit</a>
                        @include('cats.delete', ['cat' => $cat])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
