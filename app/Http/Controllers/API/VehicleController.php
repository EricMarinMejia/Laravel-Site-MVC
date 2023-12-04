<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\VehicleStoreRequest;
use App\Http\Resources\VehicleResource;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(10);
        return VehicleResource::collection($vehicles);
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
            'user_id' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'license_plate' => 'required',
            'kilometers' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);


        if ($request->file('image') != null) {

            if ($request->file('image')->isValid()) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images/upload', $filename, 'public');
            }

            $vehicle = new Vehicle([
                'created_at' => $today,
                'updated_at' => $today,
                'user_id' => $request->user_id,
                'brand' => $request->brand,
                'model' => $request->model,
                'license_plate' => $request->license_plate,
                'kilometers' => $request->kilometers,
                'image' => $filename
            ]);

            $vehicle->save();

            return response()->json($vehicle, 201);
        } else {

            $vehicle = new Vehicle([
                'created_at' => $today,
                'updated_at' => $today,
                'user_id' => $request->user_id,
                'brand' => $request->brand,
                'model' => $request->model,
                'license_plate' => $request->license_plate,
                'kilometers' => $request->kilometers,
                'image' => null
            ]);

            $vehicle->save();

            return response()->json($vehicle, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return new VehicleResource($vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $today = now();

        $request->validate([
            'user_id' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'license_plate' => 'required',
            'kilometers' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);


        if ($request->file('image') != null) {

            if ($request->file('image')->isValid()) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images/upload', $filename, 'public');
            }

            $vehicle->update([
                'created_at' => $today,
                'updated_at' => $today,
                'user_id' => $request->user_id,
                'brand' => $request->brand,
                'model' => $request->model,
                'license_plate' => $request->license_plate,
                'kilometers' => $request->kilometers,
                'image' => $filename
            ]);

            return response()->json();
        } else {

            $vehicle->update([
                'created_at' => $today,
                'updated_at' => $today,
                'user_id' => $request->user_id,
                'brand' => $request->brand,
                'model' => $request->model,
                'license_plate' => $request->license_plate,
                'kilometers' => $request->kilometers,
                'image' => null
            ]);

            return response()->json();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return response()->json();
    }
}
