<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repair;

class RepairController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs = Repair::all();
        return view('repair.index', compact('repairs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repair.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO Currently using UTC time. Should be using EAST TIME
        //TODO check if date_start is before date_end
        //TODO check if the vehicle_id exists
        $today = now();

        $request->validate([
            'vehicle_id'=>'required',
            'date_start'=>'required',
            'date_end'=>'required',
            'description'=>'required',
            'amount_paid'=>'required',
            'mechanic'=>'required'
        ]);

        $repair = new repair([
            'created_at'=>$today,
            'updated_at'=>$today,
            'vehicle_id'=>$request->get('vehicle_id'),
            'date_start'=>$request->get('date_start'),
            'date_end'=>$request->get('date_end'),
            'description'=>$request->get('description'),
            'amount_paid'=>$request->get('amount_paid'),
            'mechanic'=>$request->get('mechanic'),
            'deleted'=>0
        ]);

        $repair->save();
        return redirect('/')->with('success', 'réparation ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repair = Repair::findOrFail($id);
        return view('repair.show', compact('repair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repair = Repair::findOrFail($id);
        return view('repair.edit', compact('repair'));
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
        //TODO Currently using UTC time. Should be using EAST TIME
        //TODO check if date_start is before date_end
        //TODO check if the vehicle_id exists
        $today = now();

        $request->validate([
            'vehicle_id'=>'required',
            'date_start'=>'required',
            'date_end'=>'required',
            'description'=>'required',
            'amount_paid'=>'required',
            'mechanic'=>'required'
        ]);

        $repair = Repair::findOrFail($id);

        $repair->updated_at = $today;
        $repair->vehicle_id = $request->get('vehicle_id');
        $repair->date_start = $request->get('date_start');
        $repair->date_end = $request->get('date_end');
        $repair->description = $request->get('description');
        $repair->amount_paid = $request->get('amount_paid');
        $repair->mechanic = $request->get('mechanic');

        $repair->update();
        return redirect('/')->with('success', 'réparation modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $repair = Repair::findOrFail($id);
        $repair->delete();
        return redirect('/')->with('success', 'réparation supprimé avec succès');
    }
}
