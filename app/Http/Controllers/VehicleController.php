<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class VehicleController extends Controller
{

    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $today = now();

        $request->validate([
            'user_id'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'license_plate'=>'required',
            'kilometers'=>'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);


        if ($request->file('image')->isValid()) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/upload', $filename, 'public');
        }

        $vehicle = new vehicle([
            'created_at'=>$today,
            'updated_at'=>$today,
            'user_id'=>$request->get('user_id'),
            'brand'=>$request->get('brand'),
            'model'=>$request->get('model'),
            'license_plate'=>$request->get('license_plate'),
            'kilometers'=>$request->get('kilometers'),
            'image'=>$filename
        ]);

        $vehicle->save();
        return redirect('/vehicle')->with('success', 'véhicule ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $user = User::findOrFail($vehicle['user_id']);
        $repairs = Repair::where('vehicle_id', '=', $id)->get();

        return view('vehicle.show', compact('vehicle', 'user', 'repairs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicle.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $today = now();

        $request->validate([
            'user_id'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'license_plate'=>'required',
            'kilometers'=>'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        if ($request->file('image')->isValid()) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/upload', $filename, 'public');
        }

        $vehicle = Vehicle::findOrFail($id);

        $vehicle->updated_at = $today;
        $vehicle->user_id = $request->get('user_id');
        $vehicle->brand = $request->get('brand');
        $vehicle->model = $request->get('model');
        $vehicle->license_plate = $request->get('license_plate');
        $vehicle->kilometers = $request->get('kilometers');
        $vehicle->image = ($request->get('image'));

        $vehicle->update();
        return redirect('/vehicle')->with('success', 'véhicule modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return redirect('/vehicle')->with('success', 'véhicule supprimé avec succès');
    }
}
