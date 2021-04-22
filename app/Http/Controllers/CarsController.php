<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        // $cars = Car::all()->toJson();
        // $cars = json_decode($cars);
        
        // dd($cars);

        return view('cars.index', ['cars'=> $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        // dd('okay');
        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->imageurl = $request->input('imageurl');
        // $car->save();

        Car::create([
            'name'=>$request->input('name'),
            'founded'=>$request->input('founded'),
            'description'=>$request->input('description'),
            'imageurl'=>$request->input('imageurl'),
        ]);
        return redirect('/cars');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $car = Car::find($id);

        dd($car);
        // return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $cars = Car::find($id);
        // dd($cars->imageurl);
        return view('cars.edit')->with('car', $cars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Car::where('id', '=', $id)->update([
            'name'=>$request->input('name'),
            'founded'=>$request->input('founded'),
            'description'=>$request->input('description'),
            'imageurl'=>$request->input('imageurl'),
        ]);
        return redirect('/cars');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('/cars');
    }
}
