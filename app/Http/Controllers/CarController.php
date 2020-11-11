<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function getAllCars()
    {
        $cars = Car::orderBy('id', 'DESC')->get();
        return view('products')->with('cars', $cars);
    }

    public function deleteCar(Request $request)
    {
        Car::where('id', $request->car_id)->delete();
        return redirect()->back();
    }

    public function editCar($id)
    {
        $car = Car::where('id', $id)->firstOrFail();
        return view('edit-product')->with('car', $car);
    }

    public function updateCar(Request $request, $id)
    {
        Car::where('id', $id)->update([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year
        ]);
        return redirect()->back();
    }

    public function createCar(Request $request)
    {
        Car::create([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year
        ]);
        return redirect(route('cars.all'));
    }


    public function insertData()
    {
        $modelsArray = ['C class', 'E class', 'S class'];
        for ($i = 0; $i < 50; $i++) {
            Car::create([
                'name' => 'Car N' . $i,
                'make' => 'Mercedes Benz',
                'model' => Arr::random($modelsArray, 1)[0],
                'license_number' => rand(100000000, 999000000),
                'weight' => rand(200000, 50000),
                'registration_year' => rand(1980, 2020)
            ]);

        }
        return redirect(route('cars.all'));
    }
}
