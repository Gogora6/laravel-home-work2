@extends('layouts.layouts')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Make</th>
            <th scope="col">Models</th>
            <th scope="col">License number</th>
            <th scope="col">weight</th>
            <th scope="col">Registration Year</th>
            <th scope="col">Years of the car</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>

        </tr>
        </thead>

        <tbody>
        <form action="{{ route('car.add') }}" method="post">
            @csrf
            <tr>
                <th scope="row">#</th>
                <th><input type="text" name="name" class="form-control"></th>
                <th><input type="text" name="make" class="form-control"></th>
                <th><input type="text" name="model" class="form-control"></th>
                <th><input type="text" name="license_number" class="form-control"></th>
                <th><input type="text" name="weight" class="form-control"></th>
                <th><input type="text" name="registration_year" class="form-control"></th>
                <th><button class="btn btn-success">Add</button></th>
            </tr>
        </form>
        @foreach($cars as $car)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <th>{{ $car->name  }}</th>
                <th>{{ $car->make  }}</th>
                <th>{{ $car->model  }}</th>
                <th>{{ $car->license_number  }}</th>
                <th>{{ $car->weight  }}</th>
                <th>{{ $car->registration_year  }}</th>
                <th>{{ 2020 - ($car->registration_year)  }}</th>
                <th><a href="{{route('car.edit', ['id' => $car->id]) }}" class="btn btn-primary"> Edit</a></th>

                <th>
                    <form action="{{ route('car.delete') }}" method="post">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
