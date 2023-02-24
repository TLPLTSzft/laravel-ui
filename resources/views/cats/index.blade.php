@extends('layouts.app')

@section('title')
    Cats
@endsection

@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>tom_cat</th>
                    <th>color</th>
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
                    </tr>
                @endforeach
            </body>

        </table>
    </div>
@endsection
