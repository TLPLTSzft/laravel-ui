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
                        <h4>Edit {{ $cat->id . ' - ' . $cat->name }}</h4>
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
                        <form action={{ route('cats.update', $cat->id) }} method="post">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4  col-form-label text-md-end">Name:</label>

                                <div class="col-md-6">
                                    <input type="text" name="name" id="name"
                                        value="{{ old('name') ? old('name') : $cat->name }}" @class([
                                            'form-control',
                                            'is-invalid' => array_key_exists('name', $errors->messages()),
                                        ])>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="age" class="col-md-4  col-form-label text-md-end">Age:</label>

                                <div class="col-md-6">
                                    <input type="number" name="age" id="age"
                                        value="{{ old('age') ? old('age') : $cat->age }}" @class([
                                            'form-control',
                                            'is-invalid' => array_key_exists('age', $errors->messages()),
                                        ])>
                                    @error('age')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tom_cat" class="col-md-4  col-form-label text-md-end">Tom_cat:</label>

                                <div class="row ms-0 mt-2 col-md-1">
                                    <input type="radio" name="tom_cat" id="yes"
                                        value="{{ old('yes') ? old('yes') : '1' }}" {{ 'yes' == '1' ? 'checked' : '' }}
                                        class="form-check-input">
                                </div>
                                <label class="row ms-2 col-md-2 col-form-label">Yes</label>

                                <div class="row ms-0 mt-2 col-md-1">
                                    <input type="radio" name="tom_cat" id="no"
                                        value="{{ old('no') ? old('no') : '0' }}" {{ 'no' == '0' ? 'checked' : '' }}
                                        class="form-check-input">
                                </div>
                                <label class="row ms-2 col-md-2 col-form-label">No</label>

                                <div class="row mb-3">
                                    <label for="color" class="col-md-4  col-form-label text-md-end">Color:</label>

                                    <div class="col-md-6">
                                        <input list="colors" name="color" id="color"
                                            value="{{ old('color') ? old('color') : $cat->color }}"
                                            @class([
                                                'form-control',
                                                'is-invalid' => array_key_exists('color', $errors->messages()),
                                            ])>
                                        <datalist id="colors">
                                            <option value='black'>
                                            <option value='grey'>
                                            <option value='brown'>
                                            <option value='white'>
                                            <option value='black & white'>
                                            <option value='spotted'>
                                            <option value='ginger'>
                                        </datalist>
                                        @error('color')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
