<?php

namespace App\Http\Controllers;

use App\Report;
use App\Datalog;
use App\User;
use App\Car;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::check() ){
            $cars = Car::where('user_id', Auth::user()->id)->get();
 
            return view('cars.index', ['cars'=> $cars]);  
        }
        
        return view('auth.login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::check()){
            $car = Car::create([
                'make' => $request->input('make'),
                'model' => $request->input('model'),
                'year' => $request->input('year'),
                'plate_number' => $request->input('plate_number'),
                'user_id' => Auth::user()->id
            ]);
            if($car){
                return redirect()->route('cars.show', ['car'=> $car->id])
                ->with('success' , 'Car added successfully');
            }
        }
        
        return back()->withInput()->with('errors', 'Error adding new car');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
        dd($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
