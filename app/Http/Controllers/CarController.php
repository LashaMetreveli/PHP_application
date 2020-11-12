<?php


namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function createCar()
    {
        $car = new Car();
        $car->name = 'New Car: ' . uniqid();
        $car->make = 'make: ' . uniqid();
        $car->model = 'model: ' . uniqid();
        $car->license_number = rand(100, 1000);
        $car->weight = rand(1000, 5000);
        $car->registration_year = date('Y-m-d H:i:s');
        $car->timestamp('created_at')->default(Car::raw('CURRENT_TIMESTAMP'));
        $car->timestamp('updated_at')->default(Car::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        $car->save();

        return $car;
    }



    public function viewAllCars(Request $request)
    {
        $cars = Car::orderBy('id', 'ASC');

        $cars = $cars->get();

        return view('view-cars')
            ->with('cars', $cars);
    }

    public function addNewCar(Request $request)
    {
        $car = new Car();
        $car->name = $request->name;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->weight = $request->weight;
        $car->license_number =  $request->license_number;
        $car->registration_year = $request->registration_year;

        $car->save();

        return redirect()->route('car.all');
    }


    public function deleteCar(Request $request)
    {

        Car::where('id', $request->car_id)->delete();
        return redirect()->route('car.all');
    }

    public function editCar(Request $request, $id)
    {

        $car = Car::where('id', $id)->first();
        return  view('edit-car')->with('car', $car);
    }

    public function updateCar(Request $request, $id)
    {
        Car::where('id', $id)->update([
            'name' => $request->name,
            'make'  => $request->make,
            'model'  => $request->model,
            'license_number'  => $request->license_number,
            'weight'  => $request->weight,
            'registration_year'  => $request->registration_year,
        ]);
        return redirect()->route('car.all');
    }
}
