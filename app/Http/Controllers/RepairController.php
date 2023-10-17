<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repair;

class RepairController extends Controller
{
    /*
    public function index() {
        $repairs = Repair::all();
        return view('repair.index', compact('repairs'));
    }
    */


    /*
    public function create()
    {
        return view('repair.create');
    }
    */
    
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
        //TODO check if date_start is before date_end
        $today = date("Y-m-d H:i:s");

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
     * @param  \App\Models\Post  $post
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
