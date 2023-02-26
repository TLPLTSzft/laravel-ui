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
                        <h4>Add a new cat</h4>
                    </div>

                    <div class="card-body">
                        <form action={{ route('cats.store') }} method="post">

                            <div class="row mb-3">
                                <label for="name" class="col-md-4  col-form-label text-md-end">Name:</label>

                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" class="form-control" placeholder=""
                                        autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="age" class="col-md-4  col-form-label text-md-end">Age:</label>

                                <div class="col-md-6">
                                    <input type="number" name="age" id="age" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tom_cat" class="col-md-4  col-form-label text-md-end">Tom_cat:</label>

                                <div class="row ms-0 mt-2 col-md-6">
                                    <input type="checkbox" name="tom_cat" id="tom_cat" class="form-check-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="color" class="col-md-4  col-form-label text-md-end">Color:</label>

                                <div class="col-md-6">
                                    <input list="colors" name="color" id="color" class="form-control">
                                    <datalist id="colors">
                                        '', '', '', '', '', '', ''
                                        <option value='black'>
                                        <option value='grey'>
                                        <option value='brown'>
                                        <option value='white'>
                                        <option value='black & white'>
                                        <option value='spotted'>
                                        <option value='ginger'>
                                    </datalist>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-secondary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
