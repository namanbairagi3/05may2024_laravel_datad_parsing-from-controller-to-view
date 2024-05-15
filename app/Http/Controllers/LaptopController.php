<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{

    //1.property

    //2.constructor
    
    //3.method
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //Every function return somenint
       $laptops = Laptop::all();//2. Eleqouent
       return view('laptop.laptop',compact('laptops'));  // laptop.blade.php //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('laptop.createlaptop');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laptop $laptop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laptop $laptop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laptop $laptop)
    {
        //
    }
}
