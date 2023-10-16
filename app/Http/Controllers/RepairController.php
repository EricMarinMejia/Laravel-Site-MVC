<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repair;

class RepairController extends Controller
{
    public function index() {
        $repairs = Repair::all();
        return view('repair.index', compact('repairs'));
    }
}
