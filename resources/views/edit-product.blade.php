@extends('layouts.layouts')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit car</h3>
        </div>
        <form action="{{ route('car.update', ['id' => $car->id]) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $car->name }}"

                </div>
                <div class="form-group">
                    <label>Make</label>
                    <input class="form-control" type="text" name="make" value="{{ $car->make }}"
                    >
                </div>
                <div class="form-group">
                    <label>Model</label>
                    <input class="form-control" type="text" name="model" value="{{ $car->model }}"
                    >
                </div>
                <div class="form-group">
                    <label>License Number</label>
                    <input class="form-control" type="number" name="license_number" value="{{ $car->license_number }}"
                    >
                </div>
                <div class="form-group">
                    <label>Weight</label>
                    <input class="form-control" type="number" name="weight" value="{{ $car->weight }}"

                </div>
                <div class="form-group">
                    <label>Registration yeary</label>
                    <input class="form-control" type="number" name="registration_year"
                           value="{{ $car->registration_year }}">
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-success">Update</button>
                <a href="{{ route('cars.all') }}" class="btn btn-primary">
                    Cars List
                </a>
            </div>


        </form>

    </div>
@endsection
