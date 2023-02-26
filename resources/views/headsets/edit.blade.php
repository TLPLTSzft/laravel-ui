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
                        <h4>Edits {{ $headset->id . ' - ' . $headset->brand }}</h4>
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
                        <form action={{ route('headsets.update', $headset->id) }} method="post">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="brand" class="col-md-4  col-form-label text-md-end">Brand:</label>

                                <div class="col-md-6">
                                    <input type="text" id="brand" name="brand"
                                        value="{{ old('brand') ? old('brand') : $headset->brand }}"
                                        @class([
                                            'form-control',
                                            'is-invalid' => array_key_exists('brand', $errors->messages()),
                                        ])>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="connection" class="col-md-4  col-form-label text-md-end">Connection:</label>

                                <div class="col-md-6">
                                    <input list="connections" name="connection" id="connection"
                                        value="{{ old('connection') ? old('connection') : $headset->connection }}"
                                        @class([
                                            'form-control',
                                            'is-invalid' => array_key_exists('connection', $errors->messages()),
                                        ])>
                                    <datalist id="connections">
                                        <option value='Jack'>
                                        <option value='USB'>
                                        <option value='Wireless'>
                                        <option value='Jack / USB'>
                                        <option value='Jack / Wireless'>
                                        <option value='USB / Wireless'>
                                        <option value='Jack / USB / Wireless'>
                                    </datalist>
                                    @error('connection')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="priceUSD" class="col-md-4  col-form-label text-md-end">USD:</label>

                                <div class="col-md-6">
                                    <input type="number" name="priceUSD" id="priceUSD"
                                        value="{{ old('priceUSD') ? old('priceUSD') : $headset->priceUSD }}"
                                        @class([
                                            'form-control',
                                            'is-invalid' => array_key_exists('priceUSD', $errors->messages()),
                                        ])>
                                    @error('priceUSD')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="making" class="col-md-4  col-form-label text-md-end">Making:</label>

                                <div class="col-md-6">
                                    <input type="date" name="making" id="making"
                                        value="{{ old('making') ? old('making') : $headset->making }}" class="form-control">
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
