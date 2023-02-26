@extends('layouts.app')

@section('title')
    Cats
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Cats</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Tom_cat</th>
                            <th>Color</th>
                            <th>Operation</th>
                        </tr>
                    </thead>

                    <body>
                        @foreach ($cats as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->age }}</td>
                                <td>{{ $cat->tom_cat }}</td>
                                <td>{{ $cat->color }}</td>
                                <td>
                                    <a href="{{ route('cats.show', $cat->id) }}" class="btn btn-outline-secondary">Details</a>
                                    <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-outline-secondary">Edit</a>
                                    @include('cats.delete', ['cat' => $cat])
                                </td>
                            </tr>
                        @endforeach
                    </body>

                </table>
            </div>
        </div>
    </div>
@endsection
